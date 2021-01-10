@extends('backend.layouts.app')
@section("title","Clients Logo")
@section('main')


    @php
        $data = $settings->clients;
        $clients = json_decode($data);
    @endphp
    

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style=" ">
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-7">
                                <form action="{{ route('clients.update') }}" method="POST" class="needs-validation add-product-form" enctype="multipart/form-data" >
                                    @csrf
                                    @method("PUT")
                                    <div class="form">
                                        <div class="digital-add needs-validation " style="margin-bottom: 50px">
                                            <div class="form-group">
                                                <label for="validationCustom05" class="col-form-label pt-0"> Clients Title</label>
                                                <input name="title" value="{{ $clients->title }}" class="form-control" id="validationCustom05" type="text" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Clients Tagline</label>
                                                <input name="tagline" value="{{ $clients->tagline }}" class="form-control" id="validationCustom01" type="text" required="">
                                            </div>
                                         
                                        </div>
                                      
                                        <div class="form-group row add-product">

                                            <div class="col-xl-4 col-sm-4 col-4">
                                                
                                                <img style="max-height: 100px; width:auto" id="cl1-load" class=" img-fluid mb-3"  src="{{ asset('/') }}media/images/clients/{{ $clients -> cl1 }}" alt="" >
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">
                                                           <input type="hidden" name="old_cl1" value="{{ $clients->cl1 }}">
                                                            <input  name="cl1" id="cl1" class="upload" type="file">
                                                            <i class="fa fa-plus"></i>
                                                            <label style="font-size: 12px;" for="cl1" class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                                        </div>
                                                    </li>
                                                    
                                                </ul>
                                            </div>

                                            <div class="col-xl-4 col-sm-4 col-4">
                                                
                                                <img style="max-height: 100px; width:auto" id="cl2-load" class=" img-fluid mb-3"  src="{{ asset('/') }}media/images/clients/{{ $clients -> cl2 }}" alt="" >
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">
                                                            <input type="hidden" name="old_cl2" value="{{ $clients->cl2 }}">
                                                            <input  name="cl2" id="cl2" class="upload" type="file">
                                                            <i class="fa fa-plus"></i>
                                                            <label style="font-size: 12px;" for="cl2" class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                                        </div>
                                                    </li>
                                                    
                                                </ul>
                                            </div>

                                            <div class="col-xl-4 col-sm-4 col-4">
                                                
                                                <img style="max-height: 100px; width:auto" id="cl3-load" class=" img-fluid mb-3"  src="{{ asset('/') }}media/images/clients/{{ $clients -> cl3 }}" alt="" >
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">
                                                            <input type="hidden" name="old_cl3" value="{{ $clients->cl3 }}">
                                                            <input  name="cl3" id="cl3" class="upload" type="file">
                                                            <i class="fa fa-plus"></i>
                                                            <label style="font-size: 12px;" for="cl3" class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                                        </div>
                                                    </li>
                                                    
                                                </ul>
                                            </div>

                                            <div class="col-xl-4 col-sm-4 col-4">
                                                
                                                <img style="max-height: 100px; width:auto" id="cl4-load" class=" img-fluid mb-3"  src="{{ asset('/') }}media/images/clients/{{ $clients -> cl4 }}" alt="" >
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">
                                                            <input type="hidden" name="old_cl4" value="{{ $clients->cl4 }}">
                                                            <input  name="cl4" id="cl4" class="upload" type="file">
                                                            <i class="fa fa-plus"></i>
                                                            <label style="font-size: 12px;" for="cl4" class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                                        </div>
                                                    </li>
                                                    
                                                </ul>
                                            </div>

                                            <div class="col-xl-4 col-sm-4 col-4">
                                                
                                                <img style="max-height: 100px; width:auto" id="cl5-load" class=" img-fluid mb-3"  src="{{ asset('/') }}media/images/clients/{{ $clients -> cl5 }}" alt="" >
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">
                                                            <input type="hidden" name="old_cl5" value="{{ $clients->cl5 }}">
                                                            <input  name="cl5" id="cl5" class="upload" type="file">
                                                            <i class="fa fa-plus"></i>
                                                            <label style="font-size: 12px;" for="cl5" class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                                        </div>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        

                                            <div class="col-xl-4 col-sm-4 col-4">
                                                
                                                <img style="max-height: 100px; width:auto" id="cl6-load" class=" img-fluid mb-3"  src="{{ asset('/') }}media/images/clients/{{ $clients -> cl6 }}" alt="" >
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">
                                                            <input type="hidden" name="old_cl6" value="{{ $clients->cl6 }}">
                                                            <input  name="cl6" id="cl6" class="upload" type="file">
                                                            <i class="fa fa-plus"></i>
                                                            <label style="font-size: 12px;" for="cl6" class=" fs mb-0 pl-1 text-white">UPLOAD</label>
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