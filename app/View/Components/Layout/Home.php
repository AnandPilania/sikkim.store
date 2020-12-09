<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Home extends Component
{
    public string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function render(): View
    {
        return view('layout.home');
    }
}
