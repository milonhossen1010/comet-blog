@extends('backend.layouts.app')
@section("title","Testimonials")
@section('main')
@php

$homepage = App\Models\Homepage::find(1);
//slider id pass
$slider_id = $homepage -> slider;
$slider = App\Models\Slider::find($slider_id);
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
                          


                            <div class="form-group col-md-10">
                                <div id="accordion" class="comet-slider-container container">



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
