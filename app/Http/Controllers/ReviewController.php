<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {
        $reviews = Review::with(['user', 'service'])->get();
        return view('reviews.index', compact('reviews'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all(); // Получаем все записи из модели User (таблица users)
        $services = Service::all(); // Получаем все записи из модели Service (таблица services)

        return view('reviews.create', compact('users', 'services')); // Передаём данные в представление
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        $review->load(['user', 'service']);
        return view('reviews.show', compact('review'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        $users = User_id::all();
        $services = Service::all();

        return view('reviews.edit', compact('review', 'users', 'services'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index');
    }
}
