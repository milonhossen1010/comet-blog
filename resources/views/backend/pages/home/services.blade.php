@extends('backend.layouts.app')
@section("title","Services")
@section('main')
@php
    $services = json_decode($homepage -> expert);
@endphp



<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style=" ">
                <div class="card-body">
                    <div class="row product-adding">
                        <div class="col-xl-7">
                            <form action="{{ route('service.update') }}" method="POST"
                                class="needs-validation add-product-form" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="form">
                                    <div class="digital-add needs-validation " style="margin-bottom: 50px">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-2 col-sm-4 mb-0">Title
                                                :</label>
                                            <input value="{{ $services-> title }}" name="title" class="form-control col-xl-8 col-sm-7"
                                                type="text">
                                        </div>

                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-2 col-sm-4 mb-0">Subtitle
                                                :</label>
                                            <input value="{{ $services -> subtitle }}" name="subtitle" class="form-control col-xl-8 col-sm-7"
                                                type="text">
                                        </div>

                                        <div class="form-group mb-3 row align-items-start mt-10">
                                            <label class="col-xl-2 col-sm-4  ">Services :</label>
                                          
                                            <div class=" mt-10 col-xl-8 col-sm-7 pl-0 pr-0" >
                                                <div id="accordionone" >

                                                     <div class="card">
                                                        <div data-parent="#accordionone" class="card-header custom-card collapsed" style="padding: 25px; cursor: pointer;" data-toggle="collapse" data-target="#items1" aria-expanded="false">
                                                            <h4 class=" mb-0 " style="color:#ff8084">Service One </h4>
                                                        </div>
                                                        <div id="items1" class="card-body collapse" style="">
                                                            <div class="form">
                                                                <div class="form-group mb-3 row">
                                                                    <label  class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                                                    <input value="{{ $services->s_title1 }}" name="title1"  class="form-control col-xl-9 col-sm-7" type="text">
                                                                </div>

                                                                <div class="form-group mb-3 row align-items-start">
                                                                    <label  class="col-xl-3 col-sm-4 mb-0">Text :</label>  
                                                                    <textarea  name="text1" class="form-control col-xl-9 col-sm-7" rows="3">{{ $services->s_text1 }}</textarea>
                                                                </div>
                                                            
                                                            </div>
                                                        </div> 
                                                    </div>

                                                    <div class="card">
                                                        <div data-parent="#accordionone" class="card-header custom-card collapsed" style="padding: 25px; cursor: pointer;" data-toggle="collapse" data-target="#items2" aria-expanded="false">
                                                            <h4 class=" mb-0 " style="color:#ff8084">Service Two </h4>
                                                        </div>
                                                        <div id="items2" class="card-body collapse" style="">
                                                            <div class="form">
                                                                <div class="form-group mb-3 row">
                                                                    <label  class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                                                    <input value="{{ $services->s_title2 }}" name="title2"  class="form-control col-xl-9 col-sm-7" type="text">
                                                                </div>

                                                                <div class="form-group mb-3 row align-items-start">
                                                                    <label  class="col-xl-3 col-sm-4 mb-0">Text :</label>  
                                                                    <textarea name="text2" class="form-control col-xl-9 col-sm-7" rows="3">{{ $services->s_text2 }}</textarea>
                                                                </div>
                                                            
                                                            </div>
                                                        </div> 
                                                    </div>

                                                    <div class="card">
                                                        <div data-parent="#accordionone" class="card-header custom-card collapsed" style="padding: 25px; cursor: pointer;" data-toggle="collapse" data-target="#items3" aria-expanded="false">
                                                            <h4 class=" mb-0 " style="color:#ff8084">Service Three </h4>
                                                        </div>
                                                        <div id="items3" class="card-body collapse" style="">
                                                            <div class="form">
                                                                <div class="form-group mb-3 row">
                                                                    <label  class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                                                    <input value="{{ $services->s_title3 }}" name="title3"  class="form-control col-xl-9 col-sm-7" type="text">
                                                                </div>

                                                                <div class="form-group mb-3 row align-items-start">
                                                                    <label  class="col-xl-3 col-sm-4 mb-0">Text :</label>  
                                                                    <textarea name="text3" class="form-control col-xl-9 col-sm-7" rows="3">{{ $services->s_text3 }}</textarea>
                                                                </div>
                                                            
                                                            </div>
                                                        </div> 
                                                    </div>

                                                    <div class="card">
                                                        <div data-parent="#accordionone" class="card-header custom-card collapsed" style="padding: 25px; cursor: pointer;" data-toggle="collapse" data-target="#items4" aria-expanded="false">
                                                            <h4 class=" mb-0 " style="color:#ff8084">Service Four </h4>
                                                        </div>
                                                        <div id="items4" class="card-body collapse" style="">
                                                            <div class="form">
                                                                <div class="form-group mb-3 row">
                                                                    <label  class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                                                    <input value="{{ $services->s_title4 }}" name="title4"  class="form-control col-xl-9 col-sm-7" type="text">
                                                                </div>

                                                                <div class="form-group mb-3 row align-items-start">
                                                                    <label  class="col-xl-3 col-sm-4 mb-0">Text :</label>  
                                                                    <textarea name="text4" class="form-control col-xl-9 col-sm-7" rows="3">{{ $services->s_text4 }}</textarea>
                                                                </div>
                                                            
                                                            </div>
                                                        </div> 
                                                    </div>

                                                </div>
                                            </div>

                                            
                                            
                                        </div>

                                    </div>

                                    <div class="form-group row add-product">

                                        <div class="col-xl-4 col-sm-4 col-4">
                                            <label class=" d-block pb-2 text-uppercase">Background Image</label>
                                            <img style="max-height: 200px; width:auto" id="cl1-load"
                                                class=" img-fluid mb-3" src="{{ asset('/') }}media/images/pages/homepage/{{ $services -> bg_img }}" alt="">
                                            <ul class="file-upload-product">
                                                <li>
                                                    <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;"
                                                        class="box-input-file bg-black">
                                                        <input type="hidden" name="old_bg_img" value="{{ $services -> bg_img }}">
                                                        <input name="bg_img" id="cl1" class="upload" type="file">
                                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                                        <label style="font-size: 12px;" for="cl1"
                                                            class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>

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
