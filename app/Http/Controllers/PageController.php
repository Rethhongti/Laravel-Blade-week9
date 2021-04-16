<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function aboutPage(){
        return view('about');
    }

    public function teamPage(){
        return view('team');
    }
    public function testimonial(){
        return view('testimonials');
    }
    public function servicePage(){
        return view('service');
    }
    public function portfolioPage(){
        return view('portfolio');
    }
    public function pricingPage(){
        return view('pricing');
    }
    public function blogPage(){
        return view('blog');
    }
    public function contactPage(){
        return view('contact');
    }

    public function blogSinglePage(){
        return view('blog-single');
    }
    public function portfolioDetailPage(){
        return view('portfolio-details');
    }
}
