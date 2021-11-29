<?php

namespace App\Http\Controllers\Backend\Restaurant;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    //
    public function  addrestaurant(){
        return view('backend.restaurant.add_restaurant');
    }

    public function  storerestaurant(Request $request)
    {
        $resta = new  Restaurant();
        $resta->name = $request->name;
        $resta->address = $request->address;
        $resta->mobile = $request->mobile;
        $resta->opening_time = $request->opening_time;
        $resta->closing_time = $request->closing_time;
        $resta->description = $request->description;
        $resta->delivery_est = $request->delivery_est;
        $resta->email = $request->email;
        $resta->bank_name = $request->bank_name;
        $resta->account_name = $request->account_name;
        $resta->account_no = $request->account_no;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/restaurant_images'), $filename);
            $resta['image'] = $filename;



        }
            $resta->save();
            return redirect()->route('add.restaurant');


        }


        public function viewrestaurant(){
        $data['allData'] = Restaurant::all();

        return view('backend.restaurant.view_restaurant',$data);



        }
    }


