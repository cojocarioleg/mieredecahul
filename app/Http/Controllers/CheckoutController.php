<?php

namespace App\Http\Controllers;

use App\Mail\OrderInMail;
use App\Mail\OrderOutMail;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use PDF;


class CheckoutController extends Controller
{
    public function checkout()
    {
        $user = Auth::user();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('web.checkout.index', [
            'user' => $user,
            'cart' => $cart,
            'sum' => $sum,
        ]);
    }

    public function makeOrder(Request $request)
    {
        $user = Auth::user();


        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        $order = new Order();
        $order->user_id = $user->id;
        $order->cart_data = $order->setCartDataAttribute($cart);
        $order->total_sum = $sum;
        $order->phone = $user->phone;
        $order->address = $request->city . ' ' . $request->street;

        $user->sname = $request->sname;
        $user->street = $request->street;
        $user->city = $request->city;
        $user->postal = $request->postal;
        $user->save();

        if ($order->save()) {
            Mail::to('cojocarioleg89@gmail.com')->send(new OrderInMail([
                'carts' => $cart,
                'sum' => $sum,
                'user'=> $user,
            ]));

            Mail::to($request->user())->send(new OrderOutMail([
                'carts' => $cart,
                'sum' => $sum,
                'user'=> $user,
            ]));
            $data = [
                'carts' => $cart,
                'sum' => $sum,
                'user'=> $user,
            ];
            $pdf = PDF::loadView('web.PDF.myPDF', $data);
            $pdf->download('laraveltuts.pdf');
            \Cart::clear();
            return redirect()->route('personalArea')->with('success', __('session.checkout_success'));
        } else {
            return redirect()->route('personalArea')->with('error', __('session.checkout_error'));
        }
    }

    public function removeOrder($id)
    {
        $order = Order::where('id', $id);
        $order->delete();
        return redirect()->back()->with('success', 'orderul este sters');
    }
}
