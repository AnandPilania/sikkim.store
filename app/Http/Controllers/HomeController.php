<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Contracts\View\View;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return inertia('Home', [
            'featuredStores' => Store::query()->take(6)->get(),
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
