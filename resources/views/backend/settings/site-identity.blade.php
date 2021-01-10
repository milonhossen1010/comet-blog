@extends('backend.layouts.app')
@section("title","Site identity")
@section('main')
 

    @php
        $data = $settings->site_identity;
        $identity = json_decode($data);
    @endphp
    

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style=" ">
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-7">
                                <form action="{{ route('site.identity.update') }}" method="POST" class="needs-validation add-product-form" enctype="multipart/form-data" >
                                    @csrf
                                    @method("PUT")
                                    <div class="form">
                                        <div class="digital-add needs-validation " style="margin-bottom: 50px">
                                            <div class="form-group">
                                                <label for="validationCustom05" class="col-form-label pt-0 text-uppercase"> Site Title</label>
                                                <input name="title" value="{{ $identity->title }}" class="form-control" id="validationCustom05" type="text" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label text-uppercase">Tagline</label>
                                                <input name="tagline" value="{{ $identity->tagline }}" class="form-control" id="validationCustom01" type="text" required="">
                                            </div>
                                         
                                        </div>
                                      
                                        <div class="form-group row add-product">

                                            <div class="col-xl-4 col-sm-4 col-4">
                                                <label class=" d-block text-uppercase">Site Icon</label>
                                                <img style="max-height: 100px; width:auto" id="cl1-load" class=" img-fluid mb-3"  src="{{ asset('/') }}media/images/logo/{{ $identity->fev_icon }}" alt="" >
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">
                                                           <input type="hidden" name="old_fev_icon" value="{{ $identity->fev_icon }}">
                                                            <input  name="fev_icon" id="cl1" class="upload" type="file">
                                                            <i class="fa fa-plus"></i>
                                                            <label style="font-size: 12px;" for="fev_icon" class=" fs mb-0 pl-1 text-white">UPLOAD</label>
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