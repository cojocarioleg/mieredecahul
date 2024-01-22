<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Benefit;
use App\Models\News;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Production;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    return view('web.home.index')->with([
        'products' => Product::orderBy('order_home')->withTranslations()->take(4)->get(),
        'benefits' => Benefit::orderBy('id')->withTranslations()->take(3)->get(),
        'productions' => Production::orderBy('id','desc')->withTranslations()->take(3)->get(),
        'services' => Service::orderBy('id','desc')->withTranslations()->take(3)->get(),
        'news' => News::orderBy('id','desc')->withTranslations()->take(3)->get(),
        'offer' => Offer::where('active', 1)->withTranslations()->first(),
        'reviews' => Review::orderBy('id','desc')->withTranslations()->take(3)->get(),
        'banner' => Banner::orderBy('id','desc')->withTranslations()->first(),
    ]);
  }
}
