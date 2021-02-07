<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function GuzzleHttp\json_decode;

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


    /**
     * Setup function
     *
     * @return void
     */
    public function setup()
    {
        $sliders = Slider::all();
        
        return view('backend.pages.home.setup', compact('sliders'));
    }

    //slider id update 
    public function setupUpdate(Request $request)
    {
       $home = Homepage::find(1);

       $home -> slider = $request -> slider_id;
       $home -> update();

       return redirect()-> back()-> with('success', 'The slider is set on the homepage.');
    }

    /**
     * Service function
     *
     * @return void
     */
    public function servicesIndex()
    {
        $homepage = Homepage::find(1);
        return view('backend.pages.home.services', compact('homepage'));
    }

    public function serviceUpdate(Request $request)
    {
        $homepage = Homepage::find(1);
        

        //background image upload function
        if( $request -> hasFile('bg_img') ){
            $img = $request -> file('bg_img');
            $bg_img = 'bg_img-'. rand(1,1000) .'.'. $img -> getClientOriginalExtension();
            $img -> move(public_path('media/images/pages/homepage'), $bg_img );

            //Existing image delete
            $bg_img_path = 'media/images/pages/homepage/' . $request->old_bg_img;

            if(file_exists($bg_img_path)){
                unlink($bg_img_path);
               
             }
       
        } else{
            $bg_img = $request->old_bg_img;
            
        }

        $services = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            's_title1' => $request->title1,
            's_text1' => $request->text1,
            's_title2' => $request->title2,
            's_text2' => $request->text2,
            's_title3' => $request->title3,
            's_text3' => $request->text3,
            's_title4' => $request->title4,
            's_text4' => $request->text4,
            'bg_img' => $bg_img 
        ];

        $json_data = json_encode($services);
        $homepage -> expert = $json_data;
        $homepage -> update();

        return redirect()->back()->with('success','Update successful!');
        
    }

    /**
     * Vision function
     *
     * @return void
     */
    public function visionIndex()
    {
        $homepage = Homepage::find(1);
       return view('backend.pages.home.vision', compact('homepage'));
    }

    public function visionUpdate(Request $request)
    {
        $homepage = Homepage::find(1);
        

        //background image upload function
        if( $request -> hasFile('bg_img') ){
            $img = $request -> file('bg_img');
            $bg_img = 'vision_bg_img-'. rand(1,1000) .'.'. $img -> getClientOriginalExtension();
            $img -> move(public_path('media/images/pages/homepage'), $bg_img );

            //Existing image delete
            $bg_img_path = 'media/images/pages/homepage/' . $request->old_bg_img;

            if(file_exists($bg_img_path)){
                unlink($bg_img_path);
               
             }
       
        } else{
            $bg_img = $request->old_bg_img;
            
        }

        $services = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            's_title1' => $request->title1,
            's_text1' => $request->text1,
            's_title2' => $request->title2,
            's_text2' => $request->text2,
            's_title3' => $request->title3,
            's_text3' => $request->text3,
            's_title4' => $request->title4,
            's_text4' => $request->text4,
            'bg_img' => $bg_img 
        ];

        $json_data = json_encode($services);
        $homepage -> vision = $json_data;
        $homepage -> update();

        return redirect()->back()->with('success','Update successful!');
    }


    /**
     * Testimonial function
     *
     * @return void
     */
    public function testimonialIndex()
    {
        $homepage = Homepage::find(1);
        return view('backend.pages.home.testimonial', compact('homepage'));
    }

    public function testimonialUpdate(Request $request)
    {
   
        $slide_count = count($request->title); 

        $all_slides = [];
        for($i=0; $i < $slide_count; $i++){
           $slide_array = [
                    'slide_code' => $request-> slide_code[$i],
                    'title' => $request-> title[$i],
                    'text' => $request-> text[$i]
           ];

           array_push($all_slides, $slide_array );
        }
       


        $slides_array =[
            'test_title' => $request->testimonial_title,
            'all_slides' => $all_slides
        ];

        $all_slide_json = json_encode($slides_array);

      $homepage = Homepage::find(1);
      $homepage -> testimonial = $all_slide_json;
      $homepage -> update();
      
      return redirect()->back()->with('success','Testimonial Updated successful!');

    }


















}
