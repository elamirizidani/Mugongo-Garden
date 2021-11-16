<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Flower;
use App\Models\Room;
use App\Models\Event;
use App\Models\Bookroom;

use App\Models\Buyflower;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Carbon::now()->format('Y-m-d');
        $update = DB::table('bookrooms')->where('out_date','<=',$date)
            ->update(['status'=>'released']);


        $flowers = Flower::all()
            ->skip(0)
            ->take(4);
        $rooms = Room::all()
            ->skip(0)
            ->take(4);
        $events = Event::all()
            ->skip(0)
            ->take(4);
        
        $requestedFlowers = DB::table('buyflowers')->join('flowers', 'flowers.id','=','buyflowers.flower_id')
            ->select('flowers.name','flowers.type', 'flowers.picture', 'buyflowers.id', 'buyflowers.names', 'buyflowers.address', 'buyflowers.phone', 'buyflowers.email', 'buyflowers.price', 'buyflowers.delivery_date')
            ->whereNull('buyflowers.status')
            ->get();

        $bookedRooms = DB::table('rooms')->join('bookrooms', 'rooms.id', '=', 'bookrooms.room_id')
            ->select('rooms.type', 'rooms.capacity', 'rooms.image', 'bookrooms.price', 'bookrooms.names','bookrooms.in_date', 'bookrooms.out_date','bookrooms.phone')
            ->whereNull('bookrooms.status')
            ->get()
            ;
        return view('service')
            ->with(compact('flowers','rooms','events', 'requestedFlowers', 'bookedRooms'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
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
        //
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
