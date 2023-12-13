@php
    $routes = [
        (object) ['name' => 'Дашборд', 'route' => 'crm.index'],
        (object) ['name' => 'Пользователи', 'route' => 'crm.users.index'],
        (object) ['name' => 'Услуги', 'route' => 'crm.slugs.index'],
        (object) ['name' => 'Компания', 'route' => 'crm.companies.index'],
    ]
@endphp
<div class="sidebar">
    <ul>
        @foreach ($routes as $route)
            <a href="{{ route($route->route) }}">
                <li>{{ $route->name }}</li>
            </a>
        @endforeach
    </ul>
</div>