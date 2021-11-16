<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Bookroom;

class BookRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'names' => 'required',
        ]);
        if(
            BookRoom::where('room_id','=', $request->input('id'))
                ->whereBetween('in_date', [$request->input('indate'), $request->input('outdate')])
                ->whereBetween('out_date', [$request->input('indate'), $request->input('outdate')])
                ->exists()
        )
        {
            return redirect('/rooms/')
            ->with('message', 'this room have been booked on that day you may try other rooms please !!!');
        }
        else{
            BookRoom::create([
            'names'=> $request->input('names'),
            'phone' => $request->input('phone'), 
            'email' => $request->input('email'), 
            'number_of_rooms' => $request->input('number_of_rooms'), 
            'price' => $request->input('price'), 
            'room_id' => $request->input('id'), 
            'in_date' => $request->input('indate'),
            'out_date' => $request->input('outdate'),

        ]);
            return redirect('/rooms')->with('message', 'you have booked your room and it went successfully');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('rooms.book')
        ->with('room', Room::where('id', $id)
        ->first());
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
    /**
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $room_id
    * @return \Illuminate\Http\Response
    */
    public function check(Request $request)
    {
        if ($request -> ajax())
        {
            return "True re";
        }
    }
}
