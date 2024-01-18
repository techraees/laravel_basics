<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.index');
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
