<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class menus extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menus = json_decode(json_encode([["name" => "Anasayfa", "to" => "home"], ["name" => "Makaleler", "to" => "articles"], ["name" => "Yazarlar", "to" => "authors"]]));
        return view('components.home.menus', compact("menus"));
    }
}
