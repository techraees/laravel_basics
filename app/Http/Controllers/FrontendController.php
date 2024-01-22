<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;

class FrontendController extends Controller
{
    public function home()
    {
        $hero_name = HomeModel::find(1);
        return view('frontend.index', compact("hero_name"));
    }

    public function about()
    {
        return view('frontend.About.about');
    }

    public function contact()
    {
        return view('frontend.Contact.contact');
    }

    public function services()
    {
        return view('frontend.Services.services');
    }

    public function blog()
    {
        return view('frontend.Blog.blog');
    }
    public function blogdetails()
    {
        return view('frontend.Blog.blogdetails');
    }
    public function portfolio()
    {
        return view('frontend.Portfolio.portfolio');
    }
    public function portfolioDetail()
    {
        return view('frontend.Portfolio.portfolioDetail');
    }
}
