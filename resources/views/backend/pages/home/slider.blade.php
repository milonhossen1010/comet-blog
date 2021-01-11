@extends('backend.layouts.app')
@section("title","Slider")
@section('main')
@php
// $data = $homepage->about;
// $about = json_decode($data);
@endphp


<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">

                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab"
                                href="#account" role="tab" aria-controls="account" aria-selected="true"
                                data-original-title="" title="">Slider 1</a></li>
                        <li class="nav-item"><a class="nav-link" id="permission-tabs" data-toggle="tab"
                                href="#permission" role="tab" aria-controls="permission" aria-selected="false"
                                data-original-title="" title="">Slider 2</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel"
                            aria-labelledby="account-tab">
                            <form class="needs-validation  add-product-form" novalidate="">
                                <div class="form-group add-product mb-10 row d-flex align-items-center">
                                    <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Add Video :</label>
                                    {{-- <input class="form-control" id="validationCustom01" type="text" required=""> --}}

                                    <ul class="file-upload-product border-0 mb-0 col-xl-8 col-sm-7">
                                        <li class=" mb-0">
                                            <div style="background: #333;
                                                border-radius: 3px;width: 100px; height: 30px;"
                                                class="box-input-file bg-black">

                                                <input name="slider_video" id="slider_video" class="upload" type="file">
                                                <i class="fa fa-plus"></i>
                                                <label style="font-size: 12px;" for="slider_video"
                                                    class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                            </div>
                                        </li>

                                    </ul>
                                </div>


                                <div class="form-group col-md-10">
                                    <div id="accordion" class="comet-slider-container">



                                    </div>
                                </div>










                            </form>
                            <div class="">
                                <a href="#" id="add-slide" class="btn btn-primary">Add Slide</a>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="permission" role="tabpanel" aria-labelledby="permission-tabs">

                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header p-2" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link text-decoration-none" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Collapsible Group Item #1
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad
                                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                            truck quinoa
                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                            on it squid
                                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                            helvetica, craft
                                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                            excepteur butcher vice
                                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt you
                                            probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>
<!-- Container-fluid Ends-->





@endsection
