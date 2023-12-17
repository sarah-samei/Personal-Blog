<?php

namespace App\Http\Controllers;

use App\Models\Drawing;
use App\Models\Resin;
use App\Models\Writing;
use App\Models\Food;
use App\Models\Cake;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$draw=new Drawing();
        $draw->img_name="babr.png";
        $draw->save();

        $my_drawings=Drawing::all();
        return view('draw', compact('my_drawings'));*/
        
        return view('admin.index');

        /*$result = Drawing::latest()->first()->id;*/
        /*$result = Drawing::count();*/
        /*$result=Drawing::where('id','=',2)->get();
        return $result;*/

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
    
        if ($request->invisible == 'drawing_form') {
            $draw=new Drawing();
            $draw->img_name=$request->img_name;
            $draw->save();
        }elseif ($request->invisible == 'resin_form') {
            $resin=new Resin();
            $resin->img_name=$request->img_name;
            $resin->price=$request->price;
            $resin->save();
        }elseif ($request->invisible == 'writing_form') {
            $writing=new Writing();
            $writing->img_name=$request->img_name;
            $writing->title=$request->title;
            $writing->writing=$request->writing;
            $writing->save();
        }elseif ($request->invisible == 'food_form') {
            $food=new Food();
            $food->img_name=$request->img_name;
            $food->title=$request->title;
            $food->recipe=$request->recipe;
            $food->save();
        }elseif ($request->invisible == 'cake_form') {
            $cake=new Cake();
            $cake->img_name=$request->img_name;
            $cake->title=$request->title;
            $cake->recipe=$request->recipe;
            $cake->save();
        }else{
            return redirect()->route('admin.index');
        }

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

}
/*
$slider=Slider::where('id','=',1)->get();
$school_id = School::latest()->first()->id;
*/