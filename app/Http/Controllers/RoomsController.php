<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rooms.index')
        ->with('rooms', Room::orderBy('id', 'DESC')
        ->get())
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.addRooms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required', 
            'price' => 'required', 
            'room_nmb' => 'required|unique:rooms,room_nmb',
            'description' => 'required', 
            'capacity' => 'required', 
            'picture' => 'required | mimes:jpg,png,jpeg|max:5048',
        ]);

        $newFileName = uniqid().'_'.$request->type.'.'.$request->picture->extension();
        $request->picture->move(public_path('images/rooms'), $newFileName);

        $save = Room::create([
            'type' => $request->input('type'), 
            'price' => $request->input('price'), 
            'room_nmb' => $request->input('room_nmb'),
            'description' => $request->input('description'), 
            'image' => $newFileName,
            'capacity' => $request->input('capacity'),
        ]);
        return redirect('/rooms');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
