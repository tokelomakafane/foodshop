<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    //

    public function  addmenuitem(){
        $data['allData'] = Menu::select('restaurant_id')->groupBy('restaurant_id')->get();
         return view('backend.menuitem.add_menuitem',$data);
    }

    public function  storemenuitem(Request $request)
    {
        $resta = new  MenuItem();
        $resta->menu_id = $request->menu_id;
        $resta->name = $request->name;
        $resta->price = $request->price;
        $resta->description= $request->description;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/menuitem_images'), $filename);
            $resta['image'] = $filename;



        }
        $resta->save();
        return redirect()->route('add.menuitem');


    }

    public function viewmenuitem(){
        $data['allData'] = MenuItem::all();

        return view('backend.menuitem.view_menuitem',$data);



    }
}
