<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;
use App\Models\Buyflower;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('flower.index') 
        ->with('flowers', Flower::orderBy('id', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flower.addFlowers');
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
            'name' => 'required', 
            'type' => 'required', 
            'price' => 'required', 
            'description' => 'required', 
            'picture' => 'required | mimes:jpg,png,jpeg|max:5048',
        ]);

        $newFileName = uniqid().'_'.$request->name.'.'.$request->picture->extension();
        $request->picture->move(public_path('images/flowers'), $newFileName);

        $save = Flower::create([
            'name' => $request->input('name'), 
            'type' => $request->input('type'), 
            'price' => $request->input('price'), 
            'description' => $request->input('description'), 
            'picture' => $newFileName,
            'capacity' => $request->input('capacity'),
            'status' => 'available'
        ]);
        return redirect('/flower');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('flower.buy')
        ->with('flower', Flower::where('id', $id)->first()
        );
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
        $update = Buyflower::find($id);
        $update->status = "Delivered";
        $update->save();
        return back();
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
