@extends('backend.layouts.app')
@section("title","Social Media")
@section('main')
 

    @php
        $data = $settings->social;
        $socials = json_decode($data);
    @endphp
    

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="">
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-7">
                                <form method="POST" action="{{ route('social.update') }}" class="add-product-form" novalidate="">
                                    @csrf
                                    @method('PUT')
                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Facebook :</label>
                                            <input name="fb" value="{{ $socials->fb }}" class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text" required="">
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Twitter :</label>
                                            <input name="tw" value="{{ $socials->tw }}" class="form-control col-xl-8 col-sm-7" id="validationCustom02" type="text" required="">
                                        </div>

                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom03" class="col-xl-3 col-sm-4 mb-0">Linkedin :</label>
                                            <input name="link" value="{{ $socials->link }}" class="form-control col-xl-8 col-sm-7" id="validationCustom03" type="text" required="">

                                        </div>

                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom04" class="col-xl-3 col-sm-4 mb-0">Instagram :</label>
                                            <input name="ins" value="{{ $socials->ins }}" class="form-control col-xl-8 col-sm-7" id="validationCustom04" type="text" required="">

                                        </div>

                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom05" class="col-xl-3 col-sm-4 mb-0">Dribbble :</label>
                                            <input name="dri" value="{{ $socials->dri }}" class="form-control col-xl-8 col-sm-7" id="validationCustom05" type="text" required="">

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