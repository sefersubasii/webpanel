<?php

namespace App\Http\Controllers;

use App\HomeProduct;
use App\Slider;
use App\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $homeProducts = HomeProduct::all();

        return view('index', compact('sliders', 'homeProducts'));

    }
}
