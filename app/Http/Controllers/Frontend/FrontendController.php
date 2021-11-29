<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Cart;

class FrontendController extends Controller
{
    //

    public  function home(){
        $data['products']= MenuItem::all();
        $data['restaurants']= Restaurant::all();
        return view('frontend.index',$data);
    }

    public function restaurantslist(){
        $data['products']= MenuItem::all();
        $data['restaurants']= Restaurant::all();
        return view('frontend.resturant',$data);
    }

    public function  menu($id){

            $data['menu']  = Menu::all()->where('restaurant_id',$id);
            return view('frontend.menu',$data);


    }

    public function menuitem($id){

        $data['menu']  = MenuItem::all()->where('menu_id',$id);
        return view('frontend.menuitem',$data);

    }




    //add to cart
    public function addtocart($id)
    {

        $product = MenuItem::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);

        // dd(Session::get('cart'));
        return back();
    }

    public function updatecart(Request $request,$id){
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQty($id, $request->quantity);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return back();

    }
    public function removeproduct($id){
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }

        //dd(Session::get('cart'));
        return back();



    }


    public function Cart(){
        if(!Session::has('cart')){
            return view('frontend.cart');
        }
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);


        return view('frontend.cart',['products'=>$cart->items]);
    }
}
