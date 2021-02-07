<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;

use function GuzzleHttp\json_decode;

class SliderController extends Controller
{
    //Slider view
    public function sliderIndex()
    {
        $sliders = Slider::latest()->get()->where('slider_type','video');
        $img_sliders = Slider::latest()->get()->where('slider_type','Image');
        return view('backend.sliders.slider', compact('sliders','img_sliders'));
    }

    //Slider data send database
    public function store(Request $request)
    {
        $slide_count = count($request->title); 

        $all_slides = [];
        for($i=0; $i < $slide_count; $i++){
           $slide_array = [
                    'slide_code' => $request-> slide_code[$i],
                    'title' => $request-> title[$i],
                    'subtitle' => $request-> subtitle[$i],
                    'btn_one_title' => $request-> btn_one_title[$i],
                    'btn_one_link' => $request-> btn_one_link[$i],
                    'btn_two_title' => $request-> btn_two_title[$i],
                    'btn_two_link' => $request-> btn_two_link[$i],
           ];

           array_push($all_slides, $slide_array );
        }
       


        $slides_array =[
            'all_slides' => $all_slides
        ];

        $all_slide_json = json_encode($slides_array);

        Slider::create([
            'slider_name' => $request->slider_name,
            'slider_video' => $request->slider_video_url,
            'all_slides' => $all_slide_json,
            'slider_type' => 'video'
        ]);

        return redirect()->back()->with('success','Slider create successful!');

         
    }

    //Slider demo preview
    public function sliderPreviewId($id)
    {
        $slider = Slider::find($id);
       return view('backend.sliders.slider-preview', compact('slider'));
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id)
    {
        $delete_slider = Slider::find($id);
        $delete_slider -> delete();

        return redirect()-> back()-> with('success', 'Slider delete successful!!');
    }

    public function edit($id)
    {
       $sliders = Slider::find($id);

       
       return view('backend.sliders.slider-edit', compact('sliders'));
    }

    //sliderEditView
    public function update(Request $request)
    {
        $slide_count = count($request->title); 

        $all_slides = [];
        for($i=0; $i < $slide_count; $i++){
           $slide_array = [
                    'slide_code' => $request-> slide_code[$i],
                    'title' => $request-> title[$i],
                    'subtitle' => $request-> subtitle[$i],
                    'btn_one_title' => $request-> btn_one_title[$i],
                    'btn_one_link' => $request-> btn_one_link[$i],
                    'btn_two_title' => $request-> btn_two_title[$i],
                    'btn_two_link' => $request-> btn_two_link[$i],
           ];

           array_push($all_slides, $slide_array );
        }
       


        $slides_array =[
            'all_slides' => $all_slides
        ];

        $all_slide_json = json_encode($slides_array);
        $id = $request -> id;

        $slider = Slider::find($id);
       
        $slider ->  slider_name = $request->slider_name;
        $slider -> slider_video = $request->slider_video_url;
        $slider -> all_slides = $all_slide_json;
    
        $slider -> update();
      

        return redirect()->back()->with('success','Slider updated successful!');

    }



    /**
     * Image slider function
     *
     * @param Request $request
     * @return void
     */
    public function imgSliderCreate(Request $request)
    {
        $bg_imgs = $request->file('bg_img');

        if( $request -> hasFile('bg_img') ){
            foreach($bg_imgs as $img){
                $bg_img ='sliders-images-'. rand(1,1000).'.'. $img-> getClientOriginalExtension();
                $img-> move(public_path('media/images/sliders'), $bg_img );
                $bg_img_data[]= $bg_img;
            }
       
        } 


        $slide_count = count($request->title); 

        $all_slides = [];
        for($i=0; $i < $slide_count; $i++){
           $slide_array = [
            'slide_code' => $request-> slide_code[$i],
            'title' => $request-> title[$i],
            'subtitle' => $request-> subtitle[$i],
            'btn_one_title' => $request-> btn_one_title[$i],
            'btn_one_link' => $request-> btn_one_link[$i],
            'btn_two_title' => $request-> btn_two_title[$i],
            'btn_two_link' => $request-> btn_two_link[$i],
            'bg_img' => $bg_img_data[$i]
           ];

           array_push($all_slides, $slide_array );
        }

        $slides_array =[
            'all_slides' => $all_slides,
            
        ];
       
        $json_data = json_encode($slides_array);

       Slider::create([
           'slider_name' => $request -> slider_name,
           'slider_type' => 'Image',
           'all_slides' => $json_data 
       ]);

       return redirect()->back()->with('success','Slider added successful!');
    }


    /**
     * Image slider update function
     *
     * @param Request $request
     * @return void
     */
    public function imgSliderUpdate(Request $request)
    {
        
      // $array_data -> bg_img;

        $bg_imgs = $request->file('bg_img');
 
        if( $request -> hasFile('bg_img') ){
            foreach($bg_imgs as $img){
                $bg_img ='sliders-images-'. rand(1,1000).'.'. $img-> getClientOriginalExtension();
               // $img-> move(public_path('media/images/sliders'), $bg_img );
                $bg_img_data[]= $bg_img;
            }
       
        } 
 

        // $bg_img_data= $request->old_bg_img;

        $slide_count = count($request->title); 

        $all_slides = [];
        for($i=0; $i < $slide_count; $i++){
           $slide_array = [
            'slide_code' => $request-> slide_code[$i],
            'title' => $request-> title[$i],
            'subtitle' => $request-> subtitle[$i],
            'btn_one_title' => $request-> btn_one_title[$i],
            'btn_one_link' => $request-> btn_one_link[$i],
            'btn_two_title' => $request-> btn_two_title[$i],
            'btn_two_link' => $request-> btn_two_link[$i],
           // 'bg_img' => $bg_img_data[$i]
           
           ];

           array_push($all_slides, $slide_array );
        }

        $slides_array =[
            'all_slides' => $all_slides,
            
        ];
       
        $json_data = json_encode($slides_array);


        return   $all_slides ;




    }









}
