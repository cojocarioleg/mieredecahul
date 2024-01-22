<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpinionRequest;
use App\Models\Opinion;
use App\Models\Product;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function index($product){

        return view('web.singleProduct.index')->with([
            'product' => Product::where('slug', $product)->withTranslations()->first(),
            'reviews' => Opinion::where('product', $product)->orderBy('id', 'DESC')->get(),
        ]);
    }

    public function addReview(OpinionRequest $request, $product){

        $data = $request->all();
        $product = Product::where('slug', $product)->first();
        $data['product'] = $product->slug;
        Opinion::create($data);
        return redirect()->route('product', $product->slug)->with('success', 'Review is add');

    }
}
