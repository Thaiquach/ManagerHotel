<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Guest;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        
            $rooms = Rooms::all();
            return view('rooms.index', ['rooms' => $rooms]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotels = Hotel::all();
        $guests = Guest::all();
        $discounts = Discount::all();
        return view('rooms.create', compact('hotels', 'guests', 'discounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $room = new Rooms();
        $room->hotel_id = $request->hotel_id;
        $room->guest_id = $request->guest_id;
        $room->number = $request->number;
        $room->number = $request->number;
        $room->types = $request->types;
        $room->price = $request->price;
        $room->save();
        $room->discounts()->attach($request->discounts);
        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rooms = Rooms::find($id);
        return view('rooms.show', compact('rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rooms = Rooms::find($id);
        $hotels = Hotel::all();
        $guests = Guest::all();
        $discounts = Discount::all();
        return view('rooms.edit', compact('rooms'), compact('hotels', 'guests', 'discounts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = Rooms::find($id);
        $room->hotel_id = $request->hotel_id;
        $room->guest_id = $request->guest_id;
        $room->discounts()->sync($request->discounts);
        $room->number = $request->number;
        $room->types = $request->types;
        $room->price = $request->price;
        $room->save();
        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Rooms::find($id);
        $room->delete();
        return redirect('/rooms');
    }
}
