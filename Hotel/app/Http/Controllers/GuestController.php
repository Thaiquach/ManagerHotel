<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests = Guest::all();
        return view('guests.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $guest = Guest::create($request->all());
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->phonenumber = $request->phonenumber;
        return redirect()->route('guests.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guest = Guest::find($id);
        return view('guests.show', compact('guest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guest = Guest::find($id);
        return view('guests.edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guest = Guest::find($id);
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->phonenumber = $request->phonenumber;
        $guest->save();
        return redirect()->route('guests.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guest = Guest::find($id);
        $guest->delete();
        return redirect()->route('guests.index');
    }
}