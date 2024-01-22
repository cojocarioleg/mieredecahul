<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('web.services.index')->with([
            'services' => Service::orderBy('id', 'desc')->withTranslations()->paginate(2),
            'categories' => Category::orderBy('id', 'DESC')->withTranslations()->get(),
            'last_products' => Product::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'last_news' => News::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required',
        ]);
        $search = $request->search;

        return view('web.services.index')->with([
            'services' => Service::orderBy('id', 'DESC')->where('title', 'LIKE', "%{$search}%")->withTranslations()->paginate(9),
            'categories' => Category::orderBy('id', 'DESC')->withTranslations()->get(),
            'last_products' => Product::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'last_news' => News::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'search' => $request->search,
        ]);
    }

    public function singleService($service)
    {
        return view('web.services.singleNew')->with([
            'new' => Service::where('slug', $service)->withTranslations()->first(),
            'categories' => Category::orderBy('id', 'DESC')->withTranslations()->get(),
            'last_products' => Product::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'last_news' => News::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'services' => Service::orderBy('id', 'desc')->withTranslations()->get(),
        ]);
    }
}
