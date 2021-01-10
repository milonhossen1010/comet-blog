<?php

namespace App\Http\Controllers;

use App\Models\settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function GuzzleHttp\json_decode;

class SettingsController extends Controller
{

    /** 
     * Logo functions
     */
    public function logoIndex()
    {
       $settings = settings::find(1);
        return view('backend.settings.logo', compact('settings'));
    }

    public function updateLogo(Request $request)
    {

        $data = settings::find(1);
        $logo_data = $data -> logo;
        $logos = json_decode($logo_data);

        

        if( $request -> hasFile('d_logo') ){
            $img = $request -> file('d_logo');
            $d_logo = 'dark-logo-'. rand(1,10) .'.'. $img -> getClientOriginalExtension();
            $path = $img -> move(public_path('media/images/logo'), $d_logo );

            //Existing image delete
            $d_logo_path = 'media/images/logo/' . $logos -> d_logo;

            if(file_exists($d_logo_path)){
                unlink($d_logo_path);
               
             }
       
        } else{
            $d_logo = $logos -> d_logo;
            
        }


        if( $request -> hasFile('l_logo') ){
            $logo = $request -> file('l_logo');
            $l_logo ='light-logo-'. rand(1,10).'.'. $logo -> getClientOriginalExtension();
            $logo -> move(public_path('media/images/logo'), $l_logo );

            //Existing image delete
          
            $l_logo_path = 'media/images/logo/' . $logos -> l_logo;

            if(file_exists($l_logo_path)){
                unlink($l_logo_path);
             }
       
        } else{
            $l_logo = $logos -> l_logo;
        }




       $array_data = [
        'd_logo' => $d_logo,
        'l_logo' => $l_logo,
       ];

       $json = json_encode($array_data);

       $logo_data = settings::find(1);
       $logo_data -> logo = $json;
       $logo_data -> logo_width = $request->logo_width.'px';
       $logo_data -> update();

        return redirect()->back()->with("success","Logo changed");
    }


    /**
     * Social function
     */
    public function socialIndex()
    {
        $settings = settings::find(1);
        return view('backend.settings.social', compact('settings'));
    }

    public function socialUpdate(Request $request)
    {
        $data = settings::find(1);
        $social =[
            'fb' => $request->fb,
            'tw' => $request->tw,
            'link' => $request->link,
            'ins' => $request->ins,
            'dri' => $request->dri,
        ];
        
        $json = json_encode($social);

        $data->social = $json;
        $data->update();

        return redirect()->back()->with('success','Update successful!');

    }


    /**
     * Copy rights text function
     */
    public function crtIndex()
    {
        $settings = settings::find(1);
       return view('backend.settings.crt', compact('settings'));
    }

    public function crtUpdate(Request $request)
    {
        $crt_data = settings::find(1);

        $crt_data -> crt = $request->crt;
        $crt_data -> update();

        return redirect()->back()->with('success','Update Successful!');
    }

    /**  
     * Clients Functions
     */
    public function clientsIndex()
    {
        $settings = settings::find(1);
        return view('backend.settings.clients', compact('settings'));
    }


 
    public function clientsUpdate(Request $request)
    {
        $settings = settings::find(1);
       
        //client one image function
        if( $request -> hasFile('cl1') ){
            $cl1_img = $request -> file('cl1');
            $cl1 = 'clients-logo1-'. rand(1,100) .'.'. $cl1_img -> getClientOriginalExtension();
            $cl1_img -> move(public_path('media/images/clients'), $cl1 );

          //  Existing image delete
            $cl1_path = 'media/images/clients/' . $request->old_cl1;

            if(file_exists($cl1_path)){
                unlink($cl1_path);
               
             }
       
        } else{
            $cl1 = $request->old_cl1;
            
        }


         //client two image function
         if( $request -> hasFile('cl2') ){
            $cl2_img = $request -> file('cl2');
            $cl2 = 'clients-logo2-'. rand(1,100) .'.'. $cl2_img -> getClientOriginalExtension();
            $cl2_img -> move(public_path('media/images/clients'), $cl2 );

          //  Existing image delete
            $cl2_path = 'media/images/clients/' . $request->old_cl2;

            if(file_exists($cl2_path)){
                unlink($cl2_path);
               
             }
       
        } else{
            $cl2 = $request->old_cl2;
            
        }

         //client three image function
         if( $request -> hasFile('cl3') ){
            $cl3_img = $request -> file('cl3');
            $cl3 = 'clients-logo3-'. rand(1,100) .'.'. $cl3_img -> getClientOriginalExtension();
            $cl3_img -> move(public_path('media/images/clients'), $cl3 );

          //  Existing image delete
            $cl3_path = 'media/images/clients/' . $request->old_cl3;

            if(file_exists($cl3_path)){
                unlink($cl3_path);
               
             }
       
        } else{
            $cl3 = $request->old_cl3;
            
        }

        //client three image function
        if( $request -> hasFile('cl4') ){
        $cl4_img = $request -> file('cl4');
        $cl4 = 'clients-logo4-'. rand(1,100) .'.'. $cl4_img -> getClientOriginalExtension();
        $cl4_img -> move(public_path('media/images/clients'), $cl4 );

        //  Existing image delete
        $cl4_path = 'media/images/clients/' . $request->old_cl4;

        if(file_exists($cl4_path)){
            unlink($cl4_path);
            
            }
       
        } else{
            $cl4 = $request->old_cl4;
            
        }

        //client three image function
        if( $request -> hasFile('cl5') ){
            $cl5_img = $request -> file('cl5');
            $cl5 = 'clients-logo5-'. rand(1,100) .'.'. $cl5_img -> getClientOriginalExtension();
            $cl5_img -> move(public_path('media/images/clients'), $cl5 );
    
        //  Existing image delete
        $cl5_path = 'media/images/clients/' . $request->old_cl5;

        if(file_exists($cl5_path)){
            unlink($cl5_path);
            
            }
        
        } else{
            $cl5 = $request->old_cl5;
            
        }

         //client three image function
         if( $request -> hasFile('cl6') ){
            $cl6_img = $request -> file('cl6');
            $cl6 = 'clients-logo6-'. rand(1,100) .'.'. $cl6_img -> getClientOriginalExtension();
            $cl6_img -> move(public_path('media/images/clients'), $cl6 );
    
        //  Existing image delete
        $cl6_path = 'media/images/clients/' . $request->old_cl6;

        if(file_exists($cl6_path)){
            unlink($cl6_path);
            
            }
        
        } else{
            $cl6 = $request->old_cl6;
            
        }




        $clients = [
            'title' => $request->title,
            'tagline' => $request->tagline,
            'cl1' => $cl1,
            'cl2' => $cl2,
            'cl3' => $cl3,
            'cl4' => $cl4,
            'cl5' => $cl5,
            'cl6' => $cl6,
        ];

        $json = json_encode($clients);
        $settings->clients = $json;
        $settings->update();

        return redirect()->back()->with('success','Update successful!');
    }

    /**
     * Site Identity Functions
     */
    public function siteIdentityIndex()
    {
        $settings = settings::find(1);
        return view('backend.settings.site-identity', compact('settings'));
    }

    public function siteIdentityUpdate(Request $request)
    {

        $settings = settings::find(1);

        //client three image function
        if( $request -> hasFile('fev_icon') ){
            $fev_icon_img = $request -> file('fev_icon');
            $fev_icon = 'fev-icon-'. rand(1,100) .'.'. $fev_icon_img -> getClientOriginalExtension();
            $fev_icon_img -> move(public_path('media/images/logo'), $fev_icon );

          //  Existing image delete
            $fev_icon_path = 'media/images/logo/' . $request->old_fev_icon;

            if(file_exists($fev_icon_path)){
                unlink($fev_icon_path);
               
             }
       
        } else{
            $fev_icon = $request->old_fev_icon;
        }

        $site_identity = [
            'title' => $request->title,
            'tagline' => $request->tagline,
            'fev_icon' =>$fev_icon
        ];

        $json = json_encode($site_identity);

        $settings -> site_identity = $json;
        $settings -> update();
        return redirect()->back()->with('success','Update successful!');

        
    }



}




