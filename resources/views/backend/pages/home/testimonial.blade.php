@extends('backend.layouts.app')
@section("title","Testimonials")
@section('main')
@php

$testimonial = json_decode($homepage -> testimonial);
 
@endphp
 
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="">
                <div class="card-body">
                    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <form action="{{ route('testimonial.update') }}" method="POST"
                            class="needs-validation  add-product-form" novalidate="">
                            @csrf
                          
                            <div class="form-group mb-3 row">
                                <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Testimonial Title :</label>
                                <input value="{{ $testimonial ->test_title }}" name="testimonial_title" class="form-control col-xl-8 col-sm-7" type="text">
                            </div>

                            <div class="form-group col-md-10">
                                <div id="accordion" class="comet-slider-container container">

                                    @foreach ($testimonial -> all_slides as $slide)
                                        
                                   
                                    
                                            <div class="draggable card" draggable="true" id="slide-card-{{ $slide -> slide_code }}">
                                                <div data-parent="#accordion" class="card-header custom-card" style="padding: 25px; cursor: pointer;" data-toggle="collapse" data-target="#slide-{{ $slide -> slide_code }}">
                                                    <h4 class=" mb-0 " style="color:#ff8084">Slide-{{ $slide -> slide_code }}<span class="duplicate-close "><a id="test-slide-duplicate" class="{{ $slide -> slide_code }}" duplicate_id="{{ $slide -> slide_code }}" href="#"><i class="fa fa-files-o" aria-hidden="true"></i></a><a href="#" remove_id="{{ $slide -> slide_code }}" id="slide-remove-btn"><i class="fa fa-times" aria-hidden="true"></i></a></span></h4> </div>
                                                <div id="slide-{{ $slide -> slide_code }}" class="card-body collapse ">
                                                    <div class="form">
                                                        <div class="form-group mb-3 row align-items-start">
                                                            <label for="validationCustom01" class="col-xl-2 col-sm-4 mb-0">Name :</label>
                                                            <input value="{{ $slide -> title }}" name="title[]" title="{{ $slide -> slide_code }}" class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text">
                                                            <input type="hidden" value="{{ $slide -> slide_code }}" name="slide_code[]"> </div>
                                                        <div class="form-group mb-3 row align-items-start">
                                                            <label for="validationCustom02" class="col-xl-2 col-sm-4 mb-0">Text :</label>
                                                            <textarea text="{{ $slide -> slide_code }}" name="text[]" class="form-control col-xl-8 col-sm-7" rows="3">{{ $slide -> text }}</textarea>
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
                            <a href="#" id="add-testimonial" class="btn btn-primary">Add Slide</a>
                        </div>

                        <!-- ================
                            all slider show 
                        =====================-->
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

</div>
@endsection
