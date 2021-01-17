<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Homepage;
use App\Models\settings;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $settings = settings::find(1);
        $homepage = Homepage::find(1);

        //slider id pass
        $slider_id = $homepage -> slider;
        $slider = Slider::find($slider_id);
        
        return view('frontend.home', [
            'settings' => $settings, 
            'homepage' => $homepage, 
            'slider' => $slider, 
        ]);
    }
}
