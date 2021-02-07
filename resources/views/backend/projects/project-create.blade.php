@extends('backend.layouts.app')
@section("title","Category")
@section('main')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body"> 
                    <form class="needs-validation add-product-form" novalidate="">
                        <div class="form">
                            <div class="form-group mb-3 row">
                                <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                <input class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text" required="">
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group mb-3 row">
                                <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price :</label>
                                <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" type="text" required="">
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                         
                        </div>
                       
                        <div class=" ">
                            <button type="submit" class="btn btn-primary">Add Project</button>
                        </div>
                    </form>
                     
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
 

@endsection
