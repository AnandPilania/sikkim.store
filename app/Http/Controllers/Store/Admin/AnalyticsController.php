<?php

namespace App\Http\Controllers\Store\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Contracts\Support\Renderable;

class AnalyticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Store $store
     * @return Renderable
     */
    public function index(Store $store)
    {
        return view('store.admin.analytics.index', compact('store'));
    }
}
