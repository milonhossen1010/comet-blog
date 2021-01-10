@extends('backend.layouts.app')
@section("title","About")
@section('main')
 @php
     $data = $homepage->about;
     $about = json_decode($data);
 @endphp


    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="">
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-7">

                                <div class="form row">
                                    <div class="col-xl-6">
                                        <div class="media-body jsgrid ">
                                            <a href="#" class="edit-btn" style=" font-size:18px"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
                                            <h5 class="f-w-600 change-subtitle"> {{ $about-> subtitle }} </h5>
                                            <h2 class="mb-0 change-title"> {{ $about-> title }}</h2>
                                            <p class=" mt-2 change-des"> {{ $about-> des }}</p>

                                                
                                        </div>
                                    </div>

                                    <div class="col-xl-6">



                                        <div class="my-editor" id="mydiv">
                                            <div id="mydivheader" class="my-editor-header">Awesome Editor</div>
                                            <form action="{{ route('about.update') }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form p-15">


                                                    <div id="accordion">
                                                        <div>
                                                            <div id="headingOne">
                                                                <h5 class="mb-0 " data-toggle="collapse"
                                                                    data-target="#collapseOne" aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                    Title
                                                                </h5>
                                                            </div>

                                                            <div id="collapseOne" class="collapse"
                                                                aria-labelledby="headingOne" data-parent="#accordion">
                                                                <div class="form-group">
                                                                    <label class="mb-1">Text : </label>
                                                                    <input name="title" value="{{ $about-> title }}" class="form-control p-1 bg-danger"
                                                                        type="text">
                                                                </div>

                                                                <div class="form-group d-flex align-items-center">
                                                                    <label for="validationCustom01" class="mb-1">Text
                                                                        Color :
                                                                    </label>
                                                                    <input class="color ml-2" type="color" id="title-color" value="{{ $about-> title_color }}">
                                                                      <input name="title_color" class=" w-30 d-inline-block form-control ml-2" type="text" value="{{ $about-> title_color }}">
                                                                </div>

                                                                <div class="form-group d-flex align-items-center">
                                                                    <label class="">Size :</label>
                                                                    <fieldset class="qty-box  pl-2">
                                                                        <div class="input-group">
                                                                            <input  name="title_size" class="touchspin"
                                                                                type="text" value="{{ $about-> title_size }}">
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div id="headingTwo">
                                                                <h5 class="mb-0  collapsed" data-toggle="collapse"
                                                                    data-target="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    Sub title
                                                                </h5>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse"
                                                                aria-labelledby="headingTwo" data-parent="#accordion">
                                                                <div class="form-group">
                                                                    <label class="mb-1">Text : </label>
                                                                    <input name="subtitle" value="{{ $about-> subtitle }}" class="form-control p-1 bg-danger"
                                                                        type="text">
                                                                </div>

                                                                <div class="form-group d-flex align-items-center">
                                                                    <label for="validationCustom01" class="mb-1">Text
                                                                        Color :
                                                                    </label>
                                                                    <input class="color ml-2" type="color" id="subtitle-color" value="{{ $about-> subtitle_color }}">
                                                                    <input name="subtitle_color" class=" w-30 d-inline-block form-control ml-2" type="text" value="{{ $about-> subtitle_color }}">
                                                                </div>

                                                                <div class="form-group d-flex align-items-center">
                                                                    <label class="">Size :</label>
                                                                    <fieldset class="qty-box  pl-2">
                                                                        <div class="input-group">
                                                                            <input name="subtitle_size" class="touchspin"
                                                                                type="text" value="{{ $about-> subtitle_size }}">
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div id="headingThree">
                                                                <h5 class="mb-0 collapsed" data-toggle="collapse"
                                                                    data-target="#collapseThree" aria-expanded="false"
                                                                    aria-controls="collapseThree">
                                                                    Text
                                                                </h5>
                                                            </div>
                                                            <div id="collapseThree" class="collapse"
                                                                aria-labelledby="headingThree" data-parent="#accordion">
                                                                <div class="form-group">
                                                                    <label class="mb-1">Text : </label>
                                                                   
                                                                        <textarea name="des" class="form-control p-1 bg-danger" rows="3">{{ $about-> des }}</textarea>
                                                                </div>

                                                                <div class="form-group d-flex align-items-center">
                                                                    <label for="validationCustom01" class="mb-1">Text
                                                                        Color :
                                                                    </label>
                                                                    <input class="color ml-2" type="color" id="des-color" value="{{ $about-> des_color }}">
                                                                    <input name="des_color" class=" w-30 d-inline-block form-control ml-2" type="text" value="{{ $about-> des_color }}">
                                                                </div>

                                                                <div class="form-group d-flex align-items-center">
                                                                    <label class="">Size :</label>
                                                                    <fieldset class="qty-box  pl-2">
                                                                        <div class="input-group">
                                                                            <input name="des_size" class="touchspin"
                                                                                type="text" value="{{ $about-> des_size }}">
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>

                                                <div class=" d-flex align-items-center">
                                                    <button type="submit" class="btn btn-green w-50" ><i class="fa fa-check"
                                                            aria-hidden="true"></i></button>
                                                    <a href="#" class="btn w-50 btn-red editor-close" ><i
                                                            class="fa fa-close" aria-hidden="true"></i></a>

                                                </div>

                                            </form>
                                        </div>




                                    </div>


                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
@endsection
