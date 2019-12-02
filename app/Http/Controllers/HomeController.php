<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Slider;
use App\Testimonial;
use App\Utility;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title          = 'Home';
        $sliders        = Slider::all();
        $categories     = Category::all();
        $testimonials   = Testimonial::all();
        $brands         = Brand::all();
        $utility        = Utility::find(1);
        return view('home', compact('title','sliders','categories','testimonials','brands','utility'));
    }
}
