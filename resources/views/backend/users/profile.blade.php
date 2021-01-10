@extends('backend.layouts.app')
@section("title","Profile")
@section('main')
 

    @php
      
    @endphp
    

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-details text-center">
                            <img src="{{ asset('/') }}media/images/users/{{ $user->img }}" alt="" class="img-size-fix  img-90 rounded-circle blur-up lazyloaded">
                            <h5 class="f-w-600 mb-0">{{ $user -> first_name }} {{ $user -> last_name }}</h5>
                            <span>{{ $user -> email }}</span>
                            <div class="social">
                                <div class="form-group btn-showcase">
                                    <button class="btn social-btn btn-fb d-inline-block"> <i class="fa fa-facebook"></i></button>
                                    <button class="btn social-btn btn-twitter d-inline-block"><i class="fa fa-google"></i></button>
                                    <button class="btn social-btn btn-google d-inline-block mr-0"><i class="fa fa-twitter"></i></button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="project-status">
                            <h5 class="f-w-600">Employee Status</h5>
                            <div class="media">
                                <div class="media-body">
                                    <h6>Performance<span class="pull-right">80%</span></h6>
                                    <div class="progress sm-progress-bar">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h6>Overtime <span class="pull-right">60%</span></h6>
                                    <div class="progress sm-progress-bar">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h6>Leaves taken<span class="pull-right">70%</span></h6>
                                    <div class="progress sm-progress-bar">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card tab2-card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Profile</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Edit profile</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="top-tabContent">
                            <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                <h5 class="f-w-600">Profile</h5>
                                <div class="table-responsive profile-table">
                                    <table class="table table-responsive">
                                        <tbody>
                                        <tr>
                                            <td>First Name:</td>
                                            <td>{{ $user -> first_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Last Name:</td>
                                            <td>{{ $user -> last_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>User Name:</td>
                                            <td>{{ $user -> username }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>{{ $user -> email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Bio:</td>
                                            <td>{{ $user -> bio }}</td>
                                        </tr>
                                      
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                         <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                <form action="{{ route('profile.edit') }}" method="POST" enctype="multipart/form-data" class="needs-validation  user-add" novalidate="">
                                    @csrf
                                    @method("PUT")
                                    <h4>Account Details</h4>
                                    <div class="form-group row">
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
                                        <label for="validationCustom3" class="col-xl-3 col-md-4"><span class=" text-white">*</span>Change Password</label>
                                        <input name="password" class="form-control col-xl-8 col-md-7" id="validationCustom3" type="password" >
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-xl-3 col-md-4"><span class=" text-white">*</span> Profile Picture</label>
                                        <div class="col-xl-8 col-md-7   add-product">
                                                
                                            <img style="" id="cl1-load" class=" mb-2 img-size-fix  img-90 rounded-circle blur-up lazyloaded" src="{{ asset('/') }}media/images/users/{{ $user -> img }}" alt="">
                                            <ul class="file-upload-product">
                                                <li>
                                                    <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">
                                                        
                                                        <input name="img" id="cl1" class="upload" type="file">
                                                        <i class="fa fa-plus"></i>
                                                        <label style="font-size: 12px;" for="cl1" class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="validationCustom4" class="col-xl-3 col-md-4"><span class=" text-white">*</span>Bio</label>
                                        <textarea  name="bio" class="form-control col-xl-8 col-md-7" id="validationCustom4"  rows="3">{{ $user -> bio }}</textarea>
                                        
                                    </div>

                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>

                                </form>
                               
                                <div class="account-setting deactivate-account pull-right">
                                    <form action="{{ route('profile.delete') }}" method="POST">
                                        @csrf
                                        <input name="user_id" value="{{ $user->id }}" type="hidden">
                                        <button type="submit" class="btn btn-primary">Delete Account</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

 
@endsection