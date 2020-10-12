<?php

namespace App\View\Components;

use App\Models\Store;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardSideBar extends Component
{
    public Store $store;

    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    public function render(): View
    {
        return view('components.dashboard.menu_bar');
    }
}
