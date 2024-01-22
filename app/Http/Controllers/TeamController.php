<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;

class TeamController extends Controller
{
    public function team(){
        return view('web.team.index')->with([
            'teams' => Team::orderBy('id')->withTranslations()->get(),
            'categories' => Category::orderBy('id', 'DESC')->withTranslations()->get(),
            'last_products' =>Product::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
            'last_news' =>News::orderBy('id', 'DESC')->withTranslations()->get()->take(5),
        ]);
    }
}
