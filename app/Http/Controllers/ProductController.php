<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        return view('web.product.index')->with([
            'products' => Product::orderBy('id','desc')->withTranslations()->paginate(3),
            'categories' => Category::orderBy('id', 'DESC')->withTranslations()->get(),
            'last_products' =>Product::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'last_news' =>News::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'pag' => 12,
        ]);
    }
    public function search(Request $request){
        $request->validate([
            'search' => 'required',
        ]);
        $search = $request->search;

        return view('web.product.index')->with([
            'products' => Product::orderBy('id', 'DESC')->where('title', 'LIKE', "%{$search}%")->withTranslations()->paginate(9),
            'categories' => Category::orderBy('id', 'DESC')->withTranslations()->get(),
            'last_products' =>Product::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'last_news' =>News::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'search' => $request->search,
            'pag' => 12,
        ]);
    }

    public function paginate(Request $request){

        return view('web.product.index')->with([
            'products' => Product::orderBy('id','desc')->withTranslations()->paginate(3),
            'categories' => Category::orderBy('id', 'DESC')->withTranslations()->get(),
            'last_products' =>Product::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'last_news' =>News::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'pag' => $request->paginate,
        ]);

    }
}
