@extends('backend.layouts.app')
@section("title","Setup")
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
                        <div class="row product-adding">
                            <div class="col-xl-7">

                                <form action="{{ route('setup.update') }}" method="POST" class="needs-validation add-product-form" novalidate="">
                                    @csrf
                                    @method('PUT')       
                                    <div class="form">
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select homepage slider :</label>
                                            <select class="form-control digits col-xl-4 col-sm-7" name="slider_id" >
                                            <option class=" d-none" selected>{{ $slider-> slider_name }}</option>
                                               @foreach ($sliders as $slider)
                                               <option value="{{ $slider->id }}">{{ $slider -> slider_name }} - ( {{ $slider -> slider_type }} )</option>
                                               @endforeach
                                            </select>
                                        </div>
                                     
                                    </div>
                                    <div class="offset-xl-3 offset-sm-4">
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

</div>
@endsection
