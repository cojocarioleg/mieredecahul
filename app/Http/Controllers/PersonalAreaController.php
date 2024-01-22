<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Facades\Voyager;

class PersonalAreaController extends Controller
{
    public function personalArea(){
        $user = Auth::user();
        $orders = Order::query()->where(['user_id' => $user->getAuthIdentifier()])->orderBy('id', 'desc')->get();
        $orders->transform(function($order){
            $order->cart_data = unserialize($order->cart_data);
            return $order;
        });
        $sum = \Cart::getTotal('price');
        return view('web.personalArea.index', compact(
            'user',
            'orders',
            'sum',
        ));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'email' =>'required|email',
            'avatar' => 'nullable|image'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->sname = $request->sname;
        $user->street = $request->street;
        $user->city = $request->city;
        $user->postal = $request->postal;
        $user->country= $request->country;

        if($request->hasFile('avatar')){
            Storage::delete(Voyager::image($request->avatar));
            $user->avatar = $request->file('avatar')->store("users");
        }

        $user->save();

        return back()->with('success', __('session.usser_update'));
    }

    public function destroy()
    {
        $user = Auth::user();
        Storage::delete($user->avatar);
        $user->delete();
        return redirect()->route('home')->with('success', 'user is destroy');
    }
}
