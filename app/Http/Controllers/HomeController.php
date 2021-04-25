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

    public function shops(): Response
    {
        return inertia('Shop/Index', [
            'featuredStores' => Store::query()->oldest()->take(6)->get(),
            'latestStores' => Store::query()->whereDate('created_at', '>', now()->subMonths(3))->latest()->take(6)->get(),
            'topPerformingStores' => Store::query()->inRandomOrder()->take(6)->get(),
            'allStores' => Store::query()->orderBy('created_at')->paginate(12)
        ]);
    }

}
