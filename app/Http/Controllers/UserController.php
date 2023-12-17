<?php

namespace App\Http\Controllers;

use App\Models\Writing;
use App\Models\Resin;
use App\Models\Food;
use App\Models\Cake;
use App\Models\Drawing;
use App\Models\Admin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$my_drawings=Drawing::all();
        return view('draw', compact('my_drawings'));*/
        return "hello";
        
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

    public function draw()
    {
        $my_drawings=Drawing::all();
        return view('draw', compact('my_drawings'));
    }

    public function resin()
    {
        $my_resin=Resin::all();
        return view('resin', compact('my_resin'));
    }
    public function food()
    {
        $my_food=Food::all();
        return view('food', compact('my_food'));
    }
    public function cake()
    {
        $my_cake=Cake::all();
        return view('cake', compact('my_cake'));
    }
    public function writing()
    {
        $my_writing=Writing::all();
        return view('my_writing', compact('my_writing'));
    }
}
