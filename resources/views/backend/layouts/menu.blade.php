@php
    $settings = App\Models\settings::find(1);
    $logo_data =  $settings->logo;

    $logos = json_decode($logo_data);

	$route = Route::current()->getName();
	$prefix = Request::route()->getPrefix();

	

@endphp
 
<div class="page-sidebar">
	<div class="main-header-left d-none d-lg-block">
		<div class="logo-wrapper">
			<a href="{{ asset('/') }}">
				<img style="width: {{ $settings->logo_width }}" class="blur-up lazyloaded" src="{{ asset('/') }}media/images/logo/{{  $logos -> d_logo }}" alt="">
			</a>
		</div>
	</div>
	<div class="sidebar custom-scrollbar">
		<div class="sidebar-user text-center">
			<div>
				<img class="img-60 img-size-fix rounded-circle lazyloaded blur-up" src="{{ asset('/') }}media/images/users/{{ Auth::user()->img }}" alt="#">
			</div>
			<h6 class="mt-3 f-14">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h6>
			
		</div>
		<ul class="sidebar-menu">
			<li class="">
				<a class="sidebar-header " href="{{ route('home') }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
						<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
						<polyline points="9 22 9 12 15 12 15 22"></polyline>
					</svg><span>Dashboard</span>
				</a>
			</li>

			<li class="{{ ($route=='about.index') ? 'active' : ''}} {{ (Auth::user()->role!=='administrator') ? 'd-none' : ''  }}">
				<a class="sidebar-header" href="">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
					<span>Home Page</span><i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="sidebar-submenu">
					<li class=""><a class="" href="{{ route('slider.index') }}"><i class="fa fa-circle"></i>Slider</a></li>
					<li class="{{ ($route=='about.index')? 'active' :'' }}"><a class="{{ ($route=='about.index') ? 'active' : '' }}" href="{{ route('about.index') }}"><i class="fa fa-circle"></i>About</a></li>
					<li class=""><a class="" href="#"><i class="fa fa-circle"></i>Expertise</a></li>
					<li class=""><a class="" href="#"><i class="fa fa-circle"></i>Vision</a></li>
					<li class=""><a class="" href="#"><i class="fa fa-circle"></i>Testimonials</a></li>
					<li class=""><a class="" href="#"><i class="fa fa-circle"></i>Blog</a></li>
				</ul>
			</li>

			<li class="{{  ($route=='post-category.index') ? 'active' : '' }} {{ (Auth::user()->role!=='administrator') ? 'd-none' : ''  }}">
				<a class="sidebar-header" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
						<path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path>
						<polyline points="2.32 6.16 12 11 21.68 6.16"></polyline>
						<line x1="12" y1="22.76" x2="12" y2="11"></line>
					</svg> <span>Posts</span><i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="sidebar-submenu">
                    <li><a href="#"><i class="fa fa-circle"></i>All Posts</a>
                    </li>
                    <li><a href="#"><i class="fa fa-circle"></i>Add New</a>
                    </li>
                    <li class="{{  ($route=='post-category.index') ? 'active' : '' }}"><a class="{{  ($route=='post-category.index') ? 'active' : '' }}" href="{{ route('post-category.index') }}"><i class="fa fa-circle"></i>Categories</a>
                    </li>
                    <li><a href="#"><i class="fa fa-circle"></i>Tags</a>
                    </li>
				</ul>
			</li>

			<li class="{{ ($route=='profile.index' || $route=='all-users.index')? 'active' : '' }}">
				<a class="sidebar-header" href="">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
						<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
						<circle cx="8.5" cy="7" r="4"></circle>
						<line x1="20" y1="8" x2="20" y2="14"></line>
						<line x1="23" y1="11" x2="17" y2="11"></line>
					</svg><span>Users</span><i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="sidebar-submenu">
					<li class="{{ ($route=='profile.index')? 'active' : '' }}"><a class="{{ ($route=='profile.index')? 'active' : '' }}" href="{{ route('profile.index') }}"><i class="fa fa-circle"></i>Profile</a></li>
					<li class="{{ ($route=='all-users.index')? 'active' : '' }}"><a class="{{ ($route=='all-users.index')? 'active' : '' }}" href="{{ route('all-users.index') }}"><i class="fa fa-circle"></i>All Users</a></li>
					
				</ul>
			</li>
		
			<li class="{{ (Auth::user()->role!=='administrator') ? 'd-none' : ''  }} {{  ($route=='logo.index' OR $route=='site.identity.index' || $route=='social.index' || $route=='crt.index' || $route=='clients.index') ? 'active' : '' }}">
				<a class="sidebar-header" href="">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
						<circle cx="12" cy="12" r="3"></circle>
						<path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
					</svg><span>Settings</span><i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="sidebar-submenu">
					<li class="{{  ($route=='logo.index') ? 'active' : '' }}"><a class="{{  ($route=='logo.index') ? 'active' : '' }}" href="{{ route('logo.index') }}"><i class="fa fa-circle"></i>Logo</a></li>
					<li class="{{  ($route=='site.identity.index') ? 'active' : '' }}"><a class="{{  ($route=='site.identity.index') ? 'active' : '' }}" href="{{ route('site.identity.index') }}"><i class="fa fa-circle"></i>Site Identity</a></li>
					<li class="{{  ($route=='social.index') ? 'active' : '' }}"><a class="{{  ($route=='social.index') ? 'active' : '' }}" href="{{ route('social.index') }}"><i class="fa fa-circle"></i>Social</a></li>
					<li class="{{  ($route=='clients.index') ? 'active' : '' }}"><a class="{{  ($route=='clients.index') ? 'active' : '' }}" href="{{ route('clients.index') }}"><i class="fa fa-circle"></i>Clients</a></li>
					<li class="{{  ($route=='crt.index') ? 'active' : '' }}"><a class="{{  ($route=='crt.index') ? 'active' : '' }}" href="{{ route('crt.index') }}"><i class="fa fa-circle"></i>Edit Footer Credits</a></li>
				</ul>
			</li>

			
		
		
			<li>
				<a  class="sidebar-header logout-btn" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in">
						<path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
						<polyline points="10 17 15 12 10 7"></polyline>
						<line x1="15" y1="12" x2="3" y2="12"></line>
					</svg><span>Logout</span>
				</a>
			</li>
		</ul>
	</div>
</div>


<div class="page-body">


  <!-- Container-fluid starts-->
  <div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-lg-6">
				<div class="page-header-left">
					<h3>@yield('title')</h3>
				</div>
			</div>
			<div class="col-lg-6">
				<ol class="breadcrumb pull-right">
					<li class="breadcrumb-item"><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg"
								width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
								stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-home">
								<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
								<polyline points="9 22 9 12 15 12 15 22"></polyline>
							</svg></a></li>
					<li class="breadcrumb-item">
						@if ($prefix==true)
							{{ Str::ucfirst(substr($prefix, 1)) }}
						@else
							{{ 'Dashboard' }}
						@endif
					</li>
					<li class="breadcrumb-item active">@yield('title')</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- Container-fluid Ends-->