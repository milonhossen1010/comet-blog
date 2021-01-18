@php
$slider_data = json_decode($sliders->all_slides);
$all_slides = $slider_data -> all_slides;
@endphp

@if ($sliders->slider_type == 'video')

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
        <form action="{{ route('slider.update') }}" method="POST" class="needs-validation  add-product-form"
            novalidate="">
            @csrf
            @method('put')
            <div class="form-group mb-3 row">
                <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Slider name :</label>
                <input value="{{ $sliders->slider_name }}" name="slider_name" class="form-control col-xl-8 col-sm-7"
                    type="text">
                <input type="hidden" name="id" value="{{ $sliders->id }}">
            </div>
            <div class="form-group add-product mb-10 row d-flex align-items-center">
                <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Add Video : </label>
                <ul class="file-upload-product border-0 mb-0 col-xl-8 col-sm-7 d-flex align-items-center p-0">
                    <li class=" mb-0" style="flex:10%">
                        <div style="background: #333;
                            border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">

                            <input name="slider_video" id="slider_video" class="upload" type="file">
                            <i class="fa fa-plus"></i>
                            <label style="font-size: 12px;" for="slider_video"
                                class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                        </div>
                    </li>
                    <li class=" mb-0" style="flex: 10%;text-align: center;display: block;">
                        OR </li>
                    <li class="mb-0  " style="flex:80%;"><input name="slider_video_url" type="text"
                            value="{{ $sliders->slider_video }}" class=" form-control ">
                    </li>
                </ul>
            </div>


            <div class="form-group col-md-12">
                <div id="accordion1" class="comet-slider-container modal_slider_content container">

                    @foreach ( $all_slides as $slide)

                    <div class="  card" id="slide-card-{{ $slide->slide_code }}">
                        <div data-parent="#accordion1" class="card-header custom-card"
                            style="padding: 25px; cursor: pointer;" data-toggle="collapse"
                            data-target="#slide-{{ $slide->slide_code }}" aria-expanded="true">
                            <h4 class=" mb-0 " style="color:#ff8084">
                                Slide-{{ $slide -> slide_code }}
                                <span class="duplicate-close ">
                                    <a id="modal-slide-duplicate" class="{{ $slide->slide_code }}"
                                        duplicate_id="{{ $slide->slide_code }}" href="#">
                                        <i class="fa fa-files-o" aria-hidden="true"></i>
                                    </a><a href="#" remove_id="{{ $slide->slide_code }}" id="slide-remove-btn">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                </span>
                            </h4>
                        </div>
                        <div id="slide-{{ $slide->slide_code }}" class="card-body collapse" style="">
                            <div class="form">
                                <div class="form-group mb-3 row">
                                    <label for="validationCustom01" class="col-xl-4 col-sm-4 mb-0">Title :</label>
                                    <input value="{{ $slide -> title }}" name="title[]" title="{{ $slide->slide_code }}"
                                        class="form-control col-xl-8 col-sm-7" type="text">
                                    <input type="hidden" value="{{ $slide->slide_code }}" name="slide_code[]">
                                </div>
                                <div class="form-group mb-3 row"><label for="validationCustom02"
                                        class="col-xl-4 col-sm-4 mb-0">Subtitle :</label><input
                                        value="{{ $slide -> subtitle }}" subtitle="{{ $slide->slide_code }}"
                                        name="subtitle[]" class="form-control col-xl-8 col-sm-7" type="text"> </div>
                                <div class="form-group mb-3 row"><label for="validationCustom02"
                                        class="col-xl-4 col-sm-4 mb-0">Button One Title :</label><input
                                        value="{{ $slide -> btn_one_title }}" btn_one_title="{{ $slide->slide_code }}"
                                        name="btn_one_title[]" class="form-control col-xl-8 col-sm-7" type="text">
                                </div>
                                <div class="form-group mb-3 row"><label for="validationCustom02"
                                        class="col-xl-4 col-sm-4 mb-0">Button One Link :</label><input
                                        value="{{ $slide -> btn_one_link }}" btn_one_link="{{ $slide->slide_code }}"
                                        name="btn_one_link[]" class="form-control col-xl-8 col-sm-7" type="text"> </div>
                                <div class="form-group mb-3 row"><label for="validationCustom02"
                                        class="col-xl-4 col-sm-4 mb-0">Button Two Title :</label><input
                                        value="{{ $slide -> btn_two_title }}" btn_two_title="{{ $slide->slide_code }}"
                                        name="btn_two_title[]" class="form-control col-xl-8 col-sm-7" type="text">
                                </div>
                                <div class="form-group mb-3 row"><label for="validationCustom02"
                                        class="col-xl-4 col-sm-4 mb-0">Button Two Link :</label><input
                                        value="{{ $slide -> btn_two_link }}" btn_two_link="{{ $slide->slide_code }}"
                                        name="btn_two_link[]" class="form-control col-xl-8 col-sm-7" type="text"> 
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>


            <div class="pull-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>


        </form>
        <div class="">
            <a href="#" id="modal-add-slide" class="btn btn-primary">Add Slide</a>
        </div>

    </div>

</div>
@elseif($sliders->slider_type == 'Image')
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
        <form action="{{ route('img.slider.update') }}" enctype="multipart/form-data" method="POST" class="needs-validation  add-product-form"
            novalidate="">
            @csrf
            @method('put')
            <div class="form-group mb-3 row">
                <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Slider name :</label>
                <input value="{{ $sliders->slider_name }}" name="slider_name" class="form-control col-xl-8 col-sm-7"
                    type="text">
                <input type="hidden" name="id" value="{{ $sliders->id }}">
            </div>

            <div class="form-group col-md-12">
                <div id="accordion1" class="comet-slider-container modal_slider_content container">

                    @foreach ( $all_slides as $slide)

                    <div class="  card" id="slide-card-{{ $slide->slide_code }}">
                        <div data-parent="#accordion1" class="card-header custom-card"
                            style="padding: 25px; cursor: pointer;" data-toggle="collapse"
                            data-target="#slide-{{ $slide->slide_code }}" aria-expanded="true">
                            <h4 class=" mb-0 " style="color:#ff8084">
                                Slide-{{ $slide -> slide_code }}
                                <span class="duplicate-close ">
                                    <a id="modal-slide-duplicate" class="{{ $slide->slide_code }}"
                                        duplicate_id="{{ $slide->slide_code }}" href="#">
                                        <i class="fa fa-files-o" aria-hidden="true"></i>
                                    </a><a href="#" remove_id="{{ $slide->slide_code }}" id="slide-remove-btn">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                </span>
                            </h4>
                        </div>
                        <div id="slide-{{ $slide->slide_code }}" class="card-body collapse" style="">
                            <div class="form">
                                <div class="form-group mb-3 row">
                                    <label for="validationCustom01" class="col-xl-4 col-sm-4 mb-0">Title :</label>
                                    <input value="{{ $slide -> title }}" name="title[]" title="{{ $slide->slide_code }}"
                                        class="form-control col-xl-8 col-sm-7" type="text">
                                    <input type="hidden" value="{{ $slide->slide_code }}" name="slide_code[]">
                                </div>
                                <div class="form-group mb-3 row"><label for="validationCustom02"
                                        class="col-xl-4 col-sm-4 mb-0">Subtitle :</label><input
                                        value="{{ $slide -> subtitle }}" subtitle="{{ $slide->slide_code }}"
                                        name="subtitle[]" class="form-control col-xl-8 col-sm-7" type="text"> </div>
                                <div class="form-group mb-3 row"><label for="validationCustom02"
                                        class="col-xl-4 col-sm-4 mb-0">Button One Title :</label><input
                                        value="{{ $slide -> btn_one_title }}" btn_one_title="{{ $slide->slide_code }}"
                                        name="btn_one_title[]" class="form-control col-xl-8 col-sm-7" type="text">
                                </div>
                                <div class="form-group mb-3 row"><label for="validationCustom02"
                                        class="col-xl-4 col-sm-4 mb-0">Button One Link :</label><input
                                        value="{{ $slide -> btn_one_link }}" btn_one_link="{{ $slide->slide_code }}"
                                        name="btn_one_link[]" class="form-control col-xl-8 col-sm-7" type="text"> </div>
                                <div class="form-group mb-3 row"><label for="validationCustom02"
                                        class="col-xl-4 col-sm-4 mb-0">Button Two Title :</label><input
                                        value="{{ $slide -> btn_two_title }}" btn_two_title="{{ $slide->slide_code }}"
                                        name="btn_two_title[]" class="form-control col-xl-8 col-sm-7" type="text">
                                </div>
                                <div class="form-group mb-3 row"><label for="validationCustom02"
                                        class="col-xl-4 col-sm-4 mb-0">Button Two Link :</label><input
                                        value="{{ $slide -> btn_two_link }}" btn_two_link="{{ $slide->slide_code }}"
                                        name="btn_two_link[]" class="form-control col-xl-8 col-sm-7" type="text">
                                </div>
                                
                                <div class="form-group row add-product">                                        
                                    <div class="col-xl-4 col-sm-4 col-4">                                            
                                        <label class=" d-block pb-2 text-uppercase">Background Image</label>                                            
                                        <img style="max-height: 200px; width:auto" id="cl1-load" class=" img-fluid mb-3" src="{{ asset('/') }}media/images/sliders/{{ $slide -> bg_img }}" alt="">                                            
                                        <ul class="file-upload-product">                                                
                                            <li>                                                    
                                                <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">                                                                                                            
                                                    <input name="bg_img[]" required="" id="cl1" value="{{ $slide->bg_img }}"  class="upload" type="file">
                                                    <input type="hidden" name="old_bg_img" value="{{ $slide->bg_img }}" >
                                                    <i class="fa fa-upload" aria-hidden="true"></i>                                                        
                                                    <label style="font-size: 12px;" for="bg_image" class=" fs mb-0 pl-1 text-white">UPLOAD</label>                                                    
                                                </div>                                                
                                            </li>                                            
                                        </ul>                                        
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
          

            <div class="pull-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>


        </form>
        <div class="">
            <a href="#" id="modal-add-slide" class="btn btn-primary">Add Slide</a>
        </div>

    </div>

</div>

@endif
