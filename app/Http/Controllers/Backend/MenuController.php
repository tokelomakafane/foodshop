<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    //
    public function getCity(Request $request)
    {

        $id =  $request->state;
        $res = DB::table('menus')

            ->where('restaurant_id', $id)
            ->get();

        $html='<option value="">select menu</option>';
        foreach ($res as $list){
            $html='<option value="'.$list->id.'">'.$list->name.'</option>';
            echo $html;
        }

    }
    public  function addmenu(){

        $data['resta'] =Restaurant::all();

     //   $data['resta'] = Restaurant::select('id')->groupBy('restaurant_id')->get();

        return view('backend.menu.add_menu',$data);
    }


    public function viewmenu(){
        $data['allData'] = Menu::select('restaurant_id')->groupBy('restaurant_id')->get();
        return view('backend.menu.view_menu',$data);

    }


    public function storemenu(Request $request){

                $menu = new Menu();
                $menu->name = $request->name;
                $menu->restaurant_id = $request->restaurant_id;


        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/menu_images'), $filename);
            $menu['image'] = $filename;


        }
        $menu->save();
        return redirect()->route('view.menu');

    }

}
