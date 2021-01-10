<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\settings;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $settings = settings::find(1);
        $homepage = Homepage::find(1);
        return view('frontend.comet.index', [
            'settings' => $settings, 
            'homepage' => $homepage, 
        ]);
    }
}
