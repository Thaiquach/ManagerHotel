<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discounts = Discount::all();
        return view('discounts.index', compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('discounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $discount = Discount::create($request->all());
        $discount->rate = $request->rate;
        $discount->type = $request->type;
        $discount->save();
        return redirect()->route('discounts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $discounts = Discount::find($id);
        return view('discounts.show', compact('discounts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $discounts = Discount::find($id);
        return view('discounts.edit', compact('discounts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $discount = Discount::find($id);
        $discount->rate = $request->rate;
        $discount->type = $request->type;
        $discount->save();
        return redirect()->route('discounts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $discount = Discount::find($id);
        $discount->delete();
        return redirect('/discounts');
    }
}
