<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Buyflower;
use App\Models\Bookroom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlowerReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $year = Carbon::now()->format('Y');

        $reports = DB::table('buyflowers')->join('flowers', 'flowers.id','=','buyflowers.flower_id')
            ->select('flowers.name','flowers.type', 'flowers.picture','buyflowers.status', 'buyflowers.id', 'buyflowers.names', 'buyflowers.address', 'buyflowers.phone', 'buyflowers.email', 'buyflowers.price', 'buyflowers.delivery_date')
            ->get();

            //month report
        $flowerMonthReport = Buyflower::select(
            DB::raw('MONTHNAME(created_at) as month'),
            DB::raw('sum(price) as price')
        )
        ->where('status','=','Delivered')
        ->groupBy('month')
        ->orderBy('month', 'DESC')
        ->take(4)
        ->get();

        $flowerYearReport = DB::table('buyflowers')->join('flowers', 'flowers.id','=','buyflowers.flower_id')
            ->where('buyflowers.status','=','Delivered')
            ->where('buyflowers.created_at','like',$year.'%')
            ->sum('buyflowers.price');

        //ROOMS report
        $roomMonthReport = Bookroom::select(
            DB::raw('MONTHNAME(created_at) as month'),
            DB::raw('sum(price) as price')
        )
        ->groupBy('month')
        ->orderBy('month', 'DESC')
        ->take(4)
        ->get();

        $roomYearReport = DB::table('bookrooms')->join('rooms', 'rooms.id','=','bookrooms.room_id')
            ->where('bookrooms.created_at','like',$year.'%')
            ->sum('bookrooms.price');

        $roomReports = DB::table('rooms')->join('bookrooms', 'rooms.id','=','bookrooms.room_id')
            ->select('rooms.room_nmb', 'bookrooms.names','bookrooms.price','bookrooms.in_date','bookrooms.out_date')
            ->get();

        return view('auth.admin.report.index')
            ->with(compact('reports','flowerYearReport','flowerMonthReport','roomMonthReport','roomYearReport','roomReports'));
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
