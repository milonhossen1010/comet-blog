@extends('backend.layouts.app')
@section("title","All Users")
@section('main')



<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">

        <div class="card-body">
        
            <div id="batchDelete" class="category-table user-list order-table jsgrid"
                style="position: relative; height: auto; width: 100%;">
                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class="jsgrid-table">
                        <tr class="jsgrid-header-row">
                            <th style="width: 50px !important;" class="jsgrid-header-cell">No</th>
                            <th style="width: 50px;" class="jsgrid-header-cell jsgrid-align-center">Avatar</th>
                            <th style="width: 100px;" class="jsgrid-header-cell">First Name</th>
                            <th style="width: 100px;" class="jsgrid-header-cell">User Name </th>
                            <th style="width: 100px;" class="jsgrid-header-cell">Email Address</th>
                            <th style="width: 100px;" class="jsgrid-header-cell">Role</th>
                            <th style="width: 100px;" class="jsgrid-header-cell">Action</th>
                        </tr>
                     
                    </table>
                </div>
                <div class="jsgrid-grid-body">
                    <table class="jsgrid-table">
                        <tbody>
                            @foreach ($all_users as $user)
                         
                            <tr class="jsgrid-row ">
                                <td style="width: 50px !important;" class="jsgrid-cell">{{ $loop->index +1 }}</td>
                                <td style="width: 50px; " class="jsgrid-cell jsgrid-align-center">
                                    <img class="img-size-fix {{ (Auth::user()->id == $user->id)? 'active-user' : ''}}"
                                        src="{{ asset('/') }}media/images/users/{{ $user->img }}" style="height: 50px; width: 50px;">
                                </td>
                                <td style="width: 100px;" class="jsgrid-cell">{{ $user->first_name }}</td>
                                <td style="width: 100px;" class="jsgrid-cell">{{ $user->username }}</td>
                                <td style="width: 100px;" class="jsgrid-cell">{{ $user->email }}</td>
                                <td style="width: 100px;" class="jsgrid-cell">{{ Str::ucfirst($user->role) }}</td>
                                <td style="width: 100px;" class="jsgrid-cell action">
                                    <a class=" " href="  @if (Auth::user()->id == $user->id)
                                        {{ route('profile.index') }}
                                  @else
                                        {{ route('user.edit', $user->id) }}
                                  @endif"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a class=" " href="{{ route('user.delete', $user -> id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        
                            
                        </tbody>
                    </table>
                </div>
                <div class="jsgrid-pager-container" style="">
                    <div class="jsgrid-pager">Pages: <span
                            class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                href="javascript:void(0);">First</a></span> <span
                            class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                href="javascript:void(0);">Prev</a></span> <span
                            class="jsgrid-pager-page jsgrid-pager-current-page">1</span><span
                            class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span> <span
                            class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Next</a></span> <span
                            class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Last</a></span> &nbsp;&nbsp; 1
                        of 2 </div>
                </div>
                <div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;">
                </div>
                <div class="jsgrid-load-panel"
                    style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->


@endsection
