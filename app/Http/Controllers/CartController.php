<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function addToBasket(Request $request){

        $product = Product::query()->where(['id' => $request->id])->first();
        $sessionId = Session::getId();
        \Cart::session($sessionId)->add([
            'id' => $product->id,
            'name' => $product->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale'),
            'price' => $product->price,
            'quantity' => $request->qty ?? 1,
            'attributes' => [
                'image' => $product->image,
                'slug' =>$product->slug,
            ],
        ]);
        $cart = \Cart::getContent();
        return redirect()->back();
        
    }

    public function removeToBasket($id){

        \Cart::remove($id);
        $sessionId = Session::getId();
        \Cart::session( $sessionId)->remove($id);
        return redirect()->back()->with('success','Item has been removed');

    }

}
