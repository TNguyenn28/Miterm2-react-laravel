<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    public function getProducts()
    {
        $restaurant = Restaurant::all();
        return response()->json(['status'=>'Successfully', 'data'=>$restaurant]);
    }
    public function ShowProduct($id)
    {
        $restaurant = Restaurant::find($id);
        return response()->json(['status'=>'Successfully', 'data'=>$restaurant]);
    }
    public function searchByName(Request $res)
    {
        if($res->key == null){
            return ["Error" => "Null"];
        }
        $result = DB::table('restaurants')
        ->where('name', 'like', '%'.$res->key.'%' )
        ->get();
        if(count($result) > 0){
            return response()->json(['status'=>"Successfully",'data'=>$result]);
        }
        return response()->json(['Error'=>"Not found"]);
    }

}
