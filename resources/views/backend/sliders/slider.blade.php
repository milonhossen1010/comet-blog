@extends('backend.layouts.app')
@section("title","Slider")
@section('main')
@php
// $data = $homepage->about;
// $about = json_decode($data);
@endphp


<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">

                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab"
                                href="#account" role="tab" aria-controls="account" aria-selected="true"
                                data-original-title="" title="">Create Video Slider</a></li>
                        <li class="nav-item"><a class="nav-link" id="img_slider-tabs" data-toggle="tab"
                                href="#img_slider" role="tab" aria-controls="img_slider" aria-selected="false"
                                data-original-title="" title="">Create Image slider</a></li>
                    </ul>

                 
                    <div class="tab-content" id="myTabContent">

                    <!---=====================
                            Video slider 
                    =======================--->
                        <div class="tab-pane fade active show" id="account" role="tabpanel"
                            aria-labelledby="account-tab">
                            <form action="{{ route('slider.store') }}" method="POST"
                                class="needs-validation  add-product-form" novalidate="">
                                @csrf
                                <div class="form-group mb-3 row">
                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Slider name
                                        :</label><input name="slider_name" class="form-control col-xl-8 col-sm-7"
                                        type="text">


                                </div>
                                <div class="form-group add-product mb-10 row d-flex align-items-center">
                                    <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Add Video :</label>
                                    {{-- <input class="form-control" id="validationCustom01" type="text" required=""> --}}

                                    <ul
                                        class="file-upload-product border-0 mb-0 col-xl-8 col-sm-7 d-flex align-items-center p-0">
                                        <li class=" mb-0" style="flex:10%">
                                            <div style="background: #333;
                                                border-radius: 3px;width: 100px; height: 30px;"
                                                class="box-input-file bg-black">

                                                <input name="slider_video" id="slider_video" class="upload" type="file">
                                                <i class="fa fa-plus"></i>
                                                <label style="font-size: 12px;" for="slider_video"
                                                    class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                            </div>
                                        </li>
                                        <li class=" mb-0" style="flex: 10%;text-align: center;display: block;"> OR </li>
                                        <li class="mb-0  " style="flex:80%;"><input name="slider_video_url" type="text"
                                                placeholder="Insert url like : www.youtube.com" class=" form-control ">
                                        </li>
                                    </ul>
                                </div>


                                <div class="form-group col-md-10">
                                    <div id="accordion" class="comet-slider-container container">



                                    </div>
                                </div>







                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>


                            </form>
                            <div class="">
                                <a href="#" id="add-slide" class="btn btn-primary">Add Slide</a>
                            </div>

                            <!-- all slider show -->
                            <div class="row products-admin ratio_asos pt-15"
                                style="background-color: #f8f8f9;background-color: #f8f8f9;padding-top: 30px;margin-top: 100px; border-radius:5px;">

                                @foreach ($sliders as $slider)


                                <div class="col-xl-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#" class="bg-size cus"
                                                        style="background-image: url(&quot;media/images/sliders/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img
                                                            src="{{ asset('/') }}media/images/sliders/1.jpg"
                                                            class="img-fluid blur-up lazyload bg-img" alt=""
                                                            style="display: none;"></a>
                                                    <div class="product-hover">
                                                        <ul class="slider_view">
                                                            <li>
                                                                <a target="_blank"
                                                                    href="{{ route('slider.preview', $slider -> id) }}"
                                                                    id="slider_preview"
                                                                    slider_preview="{{ $slider -> id }}" class="btn"
                                                                    type="button ">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" id="slider_edit"
                                                                    slider_edit_id="{{ $slider -> id }}" class="btn"
                                                                    type="button " data-original-title="" title=""><i
                                                                        class="fa fa-pencil-square-o"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('slider.delete',$slider -> id )  }}"
                                                                    class="btn"><i class="fa fa-trash-o"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-detail" style="text-align:center; margin-top: 20px">
                                                <h4>{{ $slider->slider_name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>



                        <!---=====================
                            Image slider 
                        =======================--->
                        <div class="tab-pane fade" id="img_slider" role="tabpanel" aria-labelledby="img_slider-tabs">
                            <form action="{{ route('img.slider.create') }}" method="POST"
                                class="needs-validation  add-product-form" novalidate="">
                                @csrf
                                <div class="form-group mb-3 row">
                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Slider name
                                        :</label><input name="slider_name" class="form-control col-xl-8 col-sm-7"
                                        type="text">


                                </div>
                            


                                <div class="form-group col-md-10">
                                    <div id="accordion" class="img-slider-container container">



                                    </div>
                                </div>

                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>


                            </form>
                            <div class="">
                                <a href="#" id="add-img-slide" class="btn btn-primary">Add Slide</a>
                            </div>

                            <!-- all slider show -->
                            <div class="row products-admin ratio_asos pt-15"
                                style="background-color: #f8f8f9;background-color: #f8f8f9;padding-top: 30px;margin-top: 100px; border-radius:5px;">

                                @foreach ($sliders as $slider)


                                <div class="col-xl-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#" class="bg-size cus"
                                                        style="background-image: url(&quot;media/images/sliders/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img
                                                            src="{{ asset('/') }}media/images/sliders/1.jpg"
                                                            class="img-fluid blur-up lazyload bg-img" alt=""
                                                            style="display: none;"></a>
                                                    <div class="product-hover">
                                                        <ul class="slider_view">
                                                            <li>
                                                                <a target="_blank"
                                                                    href="{{ route('slider.preview', $slider -> id) }}"
                                                                    id="slider_preview"
                                                                    slider_preview="{{ $slider -> id }}" class="btn"
                                                                    type="button ">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" id="slider_edit"
                                                                    slider_edit_id="{{ $slider -> id }}" class="btn"
                                                                    type="button " data-original-title="" title=""><i
                                                                        class="fa fa-pencil-square-o"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('slider.delete',$slider -> id )  }}"
                                                                    class="btn"><i class="fa fa-trash-o"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-detail" style="text-align:center; margin-top: 20px">
                                                <h4>{{ $slider->slider_name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>


    <!-- Container-fluid Ends-->

    <!-- Slider preview modal-->
    {{-- <div class="btn-popup pull-right">
        <div class="modal fade" id="slider-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Preview Slider</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="http://127.0.0.1:8000/slider/view/" style="border:0px #ffffff none;"
                            name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px"
                            height="400px" width="100%" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- Slider edit modal-->
    <div class="btn-popup pull-right">
        <div class="modal fade" id="slider_edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            style="display: none;" aria-hidden="true">

            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="card tab2-card">

                        <div class="card-body">
                            <div class="slider_edit_data"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>

        </div>

    </div>



    @endsection
