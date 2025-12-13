<?php


namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ShopController extends Controller
{
    /**
     * GET / [shop.index]
     */
    public function index(): View
    {
        $services = Service::withCount('reviews')
            ->with('reviews')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('shop.index', compact('services'));
    }
}
