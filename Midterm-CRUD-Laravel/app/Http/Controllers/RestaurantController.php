<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.restaurants.index", ["restaurantList" => Restaurant::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.restaurants.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([], []);
        //handle file
        
        $file = $request->img;
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path("images"), $fileName);
        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->price = $request->price;
        $restaurant->description = $request->description;
        $restaurant->category = $request->category;
        $restaurant->img = $fileName;
        $restaurant->save();
        return redirect('/restaurants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.restaurants.detail', ['restaurant' => Restaurant::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view("pages.restaurants.edit", ["restaurant" => Restaurant::find($id)]);
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
        // $request->validate([], []);
        // //handle file
        // $restaurant = Restaurant::find($id);
        // $file = $request->img;
        // $fileName = time() . '_' . $file->getClientOriginalName();
        // $file->move(public_path("images"), $fileName);
        // $restaurant->name = $request->name;
        // $restaurant->price = $request->price;
        // $restaurant->description = $request->description;
        // $restaurant->category = $request->category;
        // $restaurant->img = $fileName;
        // $restaurant->save();
        // return redirect('/restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $restaurant = Restaurant::find($id);
        // $restaurant->delete();
        // return redirect('/restaurants');
    }
}
