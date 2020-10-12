<?php

namespace App\View\Components;

use App\Icons\Icons;
use App\Models\Store;
use Illuminate\View\Component;
use Illuminate\Contracts\Support\Renderable;

class DashboardMenuLink extends Component
{
    public Store $store;
    public string $icon;
    public string $link;
    public string $name;
    protected array $icons;

    public function __construct(string $icon, string $link, string $name, Store $store, Icons $icons)
    {
        $this->link = $link;
        $this->name = $name;
        $this->store = $store;
        $this->icons = $icons->dashboard();
        $this->getIcon($icon);
    }

    public function render(): Renderable
    {
        return view('components.dashboard.menu_link');
    }

    private function getIcon(string $icon): string
    {
        return $this->icon = array_key_exists($icon, $this->icons) ? $this->icons[$icon] : $this->icons['default'];
    }
}
