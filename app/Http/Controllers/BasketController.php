<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BasketController extends Controller
{
    public function shopingCart()

    {
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');
        return view('web.ShoppingCart.index', compact('cart', 'sum'));

    }

    public function minusToBasket(Request $request){

        $sessionId = Session::getId();
        $eco = 0; $com = 0;
        $items = \Cart::session($sessionId)->getContent();
        foreach ($items as $row){
            $eco = $row->quantity;
        }

        if($eco > 1){
            \Cart::session( $sessionId)->update($request->id, [
                'quantity' => -1,
              ]);
              return redirect()->back();
        } else {
            \Cart::remove($request->id);
            $sessionId = Session::getId();
            \Cart::session( $sessionId)->remove($request->id);
            return redirect()->back()->with('success', __('session.remove_product_total'));
        }
    }
}
