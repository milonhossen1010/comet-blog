@extends('backend.layouts.app')
@section("title","User info")
@section('main')


@php

@endphp


<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
    
                <div class="card-body">
                    <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data" class="needs-validation  user-add" novalidate="">
                        @csrf
                        @method("PUT")
                        <h4>Account Details</h4>
                        <div class="form-group row">
                            <input name="id" value="{{ $user->id }}" type="hidden">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> First Name</label>
                            <input name="first_name" value="{{ $user -> first_name }}" class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" required="">
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom1" class="col-xl-3 col-md-4"><span class=" text-white">*</span> Last Name</label>
                            <input name="last_name" value="{{ $user -> last_name }}" class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" >
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> User Name</label>
                            <input name="username" value="{{ $user -> username }}" class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" required="">
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Email</label>
                            <input name="email" value="{{ $user -> email }}" class="form-control col-xl-8 col-md-7" id="exampleInputEmail12" type="email" required="">
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom3" class="col-xl-3 col-md-4"><span class=" text-white">*</span>User Role</label>
                            <select name="role" class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1">
                                <option value="{{ $user->role }}" class=" d-none">{{ $user->role }}</option>
                                <option value="administrator">Administrator</option>
                                <option value="editor">Editor</option>
                                <option value="subscriber">Subscriber</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <input value="{{ $user->id }}" name="user_id" type="hidden">
                            <label for="validationCustom3" class="col-xl-3 col-md-4"><span class=" text-white">*</span>Change Password</label>
                            <input name="password" class="form-control col-xl-8 col-md-7" id="validationCustom3" type="password" >
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
<!-- Container-fluid Ends-->


@endsection
