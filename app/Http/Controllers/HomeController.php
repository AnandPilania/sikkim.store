<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index', [
            'featured_stores' => Store::query()->take(6)->get(),
        ]);
    }

    public function shops(): View
    {
        return view('home.shops', [
            'featured_stores' => Store::query()->oldest()->take(6)->get(),
            'latest_stores' => Store::query()->whereDate('created_at', '>', now()->subMonths(3))->latest()->take(6)->get(),
            'top_performing_stores' => Store::query()->inRandomOrder()->take(6)->get(),
        ]);
    }

}
