<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatusEnum;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with(['user', 'service'])->get();
        return view('orders.index', compact('orders'));
    }



    public function create()
    {
        $users = User::all();
        $services = Service::all();
        $statuses = OrderStatusEnum::options();
        return view('orders.create', compact('users', 'services', 'statuses'));
    }


    public function store(CreateOrderRequest $request): RedirectResponse
    {
        Order::create($request->validated());
        return redirect()->route('orders.index');

    }


    public function show(Order $order)
    {
        $order=$order->load(['user', 'service']);
        return view('orders.show', compact('order'));
    }



    public function edit(Order $order)
    {
        $users = User::all();
        $services = Service::all();
        $statuses = OrderStatusEnum::options();
        return view('orders.edit', compact('order', 'users', 'services', 'statuses'));
    }


    public function update(UpdateOrderRequest $request, Order $order): RedirectResponse
    {
        $order->update($request->validated());
        return redirect()->route('orders.index');


    }



    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');

    }
}
