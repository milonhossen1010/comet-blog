@extends('backend.layouts.app')
@section("title","Change Logo")
@section('main')
 

    @php
        $data = $settings->logo;
        $logos = json_decode($data);
    @endphp
    

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style=" background:#d8cbbe ">
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-7">
                                <form action="{{ route('logo.update') }}" method="POST" class="needs-validation add-product-form" enctype="multipart/form-data" >
                                    @csrf
                                    @method("PUT")
                                    <div class="form">
                                      
                                        <div class=" form-group row add-product">
                                            <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                                <label >Dark logo</label>
                                                <img id="dark-logo-load" style="width: auto; height: 85px;" src="{{ asset('/') }}media/images/logo/{{ $logos ->d_logo }}" alt="" class=" ml-4">
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <div style="background: #333;
                                                        border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">
                                                           
                                                            <input  name="d_logo" id="dark-logo" class="upload" type="file">
                                                            <i class="fa fa-plus"></i>
                                                            <label style="font-size: 12px;" for="dark-logo" class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                                        </div>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div> 

                                        <div class=" form-group row add-product">
                                            <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                                <label >White logo</label>
                                                <img id="light-logo-load" style="width: auto; height: 85px;" src="{{ asset('/') }}media/images/logo/{{ $logos ->l_logo }}" alt="" class=" ml-4">
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <div style="background: #333;
                                                        border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">
                                                           
                                                            <input  name="l_logo" id="light-logo" class="upload" type="file">
                                                            <i class="fa fa-plus"></i>
                                                            <label style="font-size: 12px;" for="light-logo" class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                                        </div>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div> 

                                      

                                        <div class="form-group row">
                                            <label class="col-xl-2 col-sm-3 mb-0">Logo Width :</label>
                                            <fieldset class="qty-box col-xl-10 col-xl-9 col-sm-7 pl-0">
                                                <div class="input-group">
                                                    <input name="logo_width" class="touchspin" type="text" value="{{ $settings->logo_width }}">
                                                </div>
                                            </fieldset>
                                        </div>
                                       
                                        
                                        
                                    </div>
                              
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

 
@endsection