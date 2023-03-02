<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\MultiImage;
use App\Models\Blog;
use App\Models\HomeSlider;
use App\Models\Portfolio;
use App\Models\Footer;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $aboutPageData = About::first();
        $allMultiImage = MultiImage::all();
        $blogs = Blog::latest()->limit(3)->get();
        $homeSlider = HomeSlider::find(1);
        $portfolio = Portfolio::latest()->get();
        $footerData = Footer::find(1);

        return view('frontend.index',compact('aboutPageData','allMultiImage','blogs','homeSlider','portfolio','footerData'));
    }

}
