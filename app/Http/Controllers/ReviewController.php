<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

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
        $users = User::all();
        $services = Service::all();

        return view('reviews.create', compact('users', 'services'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateReviewRequest $request): RedirectResponse
    {
        Review::create($request->validated());

        return redirect()->route('reviews.index');
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
        $users = User::all();
        $services = Service::all();

        return view('reviews.edit', compact('review', 'users', 'services'));
    }


    /**

     */
    public function update(UpdateReviewRequest $request,Review $review): RedirectResponse
    {
        $review->update($request->validated());

        return redirect()->route('reviews.index');
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
