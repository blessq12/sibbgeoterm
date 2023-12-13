<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function userLogin(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|max:255',
            'password' => 'required|min:6|max:255'
        ],[
            'email.required' => 'Email обязателен',
            'email.max' => 'Email максимум 255 символов',
            'password.required' => 'Пароль обязателен',
            'password.min' => 'Пароль минимум 6 символов',
            'password.max' => 'Пароль максимум 255 символов',
        ]);
        if ($validator->fails()){
            return back()->withErrors($validator);
        }
        $active = User::where('email', $validator->validated()['email'])->first();
        
        if (!$active){
            return back()->withErrors([
                'user' => 'Пользователя с таким логином не существует'
            ]);
        }

        if (!$active->active){
            return back()->with('active', 'Учетная запись проходит проверку модератором');
        }

        if (!Auth::attempt($validator->validated())){
            return back()->withErrors([
                'user' => 'Неверный логин или пароль'
            ]);
        }
        return redirect()->route('crm.index');
    }
    public function userRegister(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'email|required|unique:users|max:255',
            'name' => 'required|min:3|max:255',
            'tel' => 'required|min:18|max:18|unique:users',
            'password' => 'required|min:6|max:255'
        ],[
            'email.email' => 'Невалидный Email',
            'email.required' => 'Email обязателен',
            'email.unique' => 'Email уже занят',
            'email.max' => 'Email максимум 255 символов',
            'name.required' => 'Имя обязательно',
            'name.min' => 'Имя минимум 3 символа',
            'name.max' => 'Имя максимум 255 символов',
            'tel.required' => 'Телефон обязателен',
            'tel.min' => 'Телефон 18 должен содержать символов',
            'tel.max' => 'Телефон 18 должен содержать символов',
            'tel.unique' => 'Телефон уже есть в базе',
            'password.required' => 'Пароль обязателен',
            'password.min' => 'Пароль минимум 6 символов',
            'password.max' => 'Пароль максимум 255 символов',
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $user = new User($validator->validated());

        if (!$user->save()){
            return back()->withErrors([
                'save' => 'Не удалось сохранить пользователя'
            ]);
        }
        return redirect()->route('auth.login')->with('created', 'Пользователь создан и отправлен на модерацию');
    }

    public function userLogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('main.index');
    }
}
