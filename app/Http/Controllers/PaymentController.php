<?php

namespace App\Http\Controllers;

use App\Enums\Payment\PaymentMethodEnum;
use App\Enums\Payment\PaymentStatusEnum;
use App\Http\Requests\CreatePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Order;
use App\Models\Payment;
use Couchbase\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index()
    {
        $payments = Payment::with(['service'])->get();
        return view('payments.index', compact('payments'));
    }


    public function create()
    {

        $orders = Order::all();
        $statuses = PaymentStatusEnum::options();
        $methods = PaymentMethodEnum::options();
        return view('payments.create', compact('orders', 'statuses', 'methods'));
    }


    public function store(CreatePaymentRequest $request): RedirectResponse
    {
        Payment::create($request->validated());
        return redirect()->route('payments.index');

    }


    public function show(Payment $payment)
    {
        $payment = $payment->load(['service']);
        return view('payments.show', compact('payment'));
    }


    public function edit(Payment $payment)
    {
        $orders = Order::all();
        $statuses = PaymentStatusEnum::options();
        $methods = PaymentMethodEnum::options();
        return view('payments.edit', compact('payment', 'orders', 'statuses', 'methods'));

    }
}
