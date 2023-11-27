<?php

namespace App\View\Components\Front;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageBanner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $background = '//via.placeholder.com/1920x1080',
        public string $title = 'Заголовок не назначен',
        

    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.page-banner');
    }
}
