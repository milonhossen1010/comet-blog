@extends('backend.layouts.app')
@section("title","Edit Footer Credits")
@section('main')
 

    

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="">
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-7">
                                <form method="POST" action="{{ route('crt.update') }}" class="needs-validation add-product-form" novalidate="">
                                    @csrf
                                    @method('PUT')
                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Edit Footer Credits :</label>
                                            <input name="crt" value="{{ $settings->crt }}" class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text" required="">
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


@endsection