<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Couchbase\View;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function index(): View
    {
        // Получаем все сервисы из базы данных
        $services = Service::all();

        // Передаем данные в представление
        return view('shop.index', compact('services'));
    }
}

