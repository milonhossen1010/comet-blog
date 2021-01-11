<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomepageController extends Controller
{
    public function aboutIndex()
    {
        $homepage = Homepage::find(1);
     
        
       return view('backend.pages.home.about', compact('homepage'));
    }

    public function aboutUpdate(Request $request)
    {
        $homepage = Homepage::find(1);

        $data = [
            'title' => $request->title,
            'title_color' => $request->title_color,
            'title_size' => $request->title_size . 'px',
            'subtitle' => $request->subtitle,
            'subtitle_color' => $request->subtitle_color,
            'subtitle_size' => $request->subtitle_size . 'px',
            'des' => $request->des,
            'des_color' => $request->des_color,
            'des_size' => $request->des_size . 'px',
        ];

        $json_data = json_encode($data);
        $homepage -> about = $json_data;
        $homepage -> update();

        // file_put_contents("style.json", $json_data);
        

        return redirect()->back()->with('success','Update successful!');
    }


    public function sliderIndex()
    {
        
        return view('backend.pages.home.slider');
    }
}
