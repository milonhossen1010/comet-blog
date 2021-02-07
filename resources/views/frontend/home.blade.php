@extends('frontend.layouts.app')

@php
//Get Logo data
$logo_data = $settings->logo;
$logos = json_decode($logo_data);

//Get Social data
$social_data = $settings->social;
$socials = json_decode($social_data);

//Get Our clients data
$clients_data = $settings->clients;
$clients = json_decode($clients_data);

//Get Site identity Data
$json = $settings->site_identity;
$site_identity = json_decode($json);

/*
*Home page Data get
*/
$about_json = $homepage -> about;
$about = json_decode($about_json);

//Services ared
$services = json_decode($homepage -> expert);

//vision
$vision = json_decode($homepage -> vision);

//Testmonials 
$testimonials = json_decode($homepage -> testimonial);

@endphp
 
@section('frontend-main')
<!-- Home section-->
<section id="home">

    @include('frontend.layouts.particals.slider')


</section>
<!-- end of home section-->
<section id="about">
    <div class="container">
        <div class="title center">
            <h4 class="upper change-subtitle">{{ $about -> subtitle }}</h4>
            <h2 class="change-title">{{ $about -> title }}<span class="red-dot"></span></h2>
            <hr>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="lead-text serif text-center change-des">{{ $about -> des }}</p>
                </div>
            </div>
            <!-- end of row-->
        </div>
        <!-- end of section content-->
    </div>
    <!-- end of container-->
</section>
<section class="p-0 b-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-4 img-side img-left mb-0">
                <div class="img-holder">
                    <img src="{{ asset('/') }}media/images/pages/homepage/{{ $services -> bg_img }}" alt="" class="bg-img">
                    <div class="centrize">
                        <div class="v-center">
                            <div class="title txt-xs-center">
                                <h4 class="upper">{{ $services -> subtitle }}</h4>
                                <h3>{{ $services -> title }}<span class="red-dot"></span></h3>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of side background image-->
            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                <div class="services">
                    <div class="row">
                        <div class="col-sm-6 border-bottom border-right">
                            <div class="service"><i class="icon-focus"></i><span class="back-icon"><i
                                        class="icon-focus"></i></span>
                                <h4>{{ $services -> s_title1 }}</h4>
                                <hr>
                                <p class="alt-paragraph">{{ $services -> s_text1 }}</p>
                            </div>
                            <!-- end of service-->
                        </div>
                        <div class="col-sm-6 border-bottom">
                            <div class="service"><i class="icon-layers"></i><span class="back-icon"><i
                                        class="icon-layers"></i></span>
                                <h4>{{ $services -> s_title2 }}</h4>
                                <hr>
                                <p class="alt-paragraph">{{ $services -> s_text2 }}</p>
                            </div>
                            <!-- end of service-->
                        </div>
                        <div class="col-sm-6 border-bottom border-right">
                            <div class="service"><i class="icon-mobile"></i><span class="back-icon"><i
                                        class="icon-mobile"></i></span>
                                <h4>{{ $services -> s_title3 }}</h4>
                                <hr>
                                <p class="alt-paragraph">{{ $services -> s_text3 }}</p>
                            </div>
                            <!-- end of service-->
                        </div>
                        <div class="col-sm-6 border-bottom">
                            <div class="service"><i class="icon-globe"></i><span class="back-icon"><i
                                        class="icon-globe"></i></span>
                                <h4>{{ $services -> s_title4 }}</h4>
                                <hr>
                                <p class="alt-paragraph">{{ $services -> s_text4 }}</p>
                            </div>
                            <!-- end of service-->
                        </div>
                    </div>
                </div>
                <!-- end of row-->
            </div>
        </div>
        <!-- end of row -->
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-4 img-side img-right">
                <div class="img-holder">
                    <img src="{{ asset('/') }}media/images/pages/homepage/{{ $vision -> bg_img }}" alt="" class="bg-img">
                </div>
            </div>
            <!-- end of side background image-->
        </div>
        <!-- end of row-->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8">
                <div class="title">
                    <h4 class="upper">{{ $vision -> subtitle }}</h4>
                    <h3>{{ $vision -> title }}<span class="red-dot"></span></h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-box">
                            <h4 class="upper small-heading">{{ $vision -> s_title1 }}</h4>
                            <p>{{ $vision -> s_text1 }}</p>
                        </div>
                        <!-- end of text box-->
                    </div>
                    <div class="col-sm-6">
                        <div class="text-box">
                            <h4 class="upper small-heading">{{ $vision -> s_title2 }}</h4>
                            <p>{{ $vision -> s_text2 }}</p>
                        </div>
                        <!-- end of text box-->
                    </div>
                    <div class="col-sm-6">
                        <div class="text-box">
                            <h4 class="upper small-heading">{{ $vision -> s_title3 }}</h4>
                            <p>{{ $vision -> s_text3 }}</p>
                        </div>
                        <!-- end of text box-->
                    </div>
                    <div class="col-sm-6">
                        <div class="text-box">
                            <h4 class="upper small-heading">{{ $vision -> s_title4 }}</h4>
                            <p>{{ $vision -> s_text4 }}</p>
                        </div>
                        <!-- end of text box-->
                    </div>
                </div>
                <!-- end of row              -->
            </div>
        </div>
        <!-- end of row-->
    </div>
    <!-- end of container-->
</section>
<section id="portfolio" class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title m-0 txt-xs-center txt-sm-center">
                    <h2 class="upper">Selected Works<span class="red-dot"></span></h2>
                    <hr>
                </div>
            </div>
            <div class="col-md-6">
                <ul id="filters" class="no-fix mt-25">
                    <li data-filter="*" class="active">All</li>
                    <li data-filter=".branding">Branding</li>
                    <li data-filter=".graphic">Graphic</li>
                    <li data-filter=".printing">Printing</li>
                    <li data-filter=".video">Video</li>
                </ul>
                <!-- end of portfolio filters-->
            </div>
        </div>
        <!-- end of row-->
    </div>
    <div class="section-content pb-0">
        <div id="works" class="four-col wide mt-50">
            <div class="work-item branding video">
                <div class="work-detail">
                    <a href="portfolio-single-1.html">
                        <img src="{{ asset('/') }}comet/images/portfolio/1.jpg" alt="">
                        <div class="work-info">
                            <div class="centrize">
                                <div class="v-center">
                                    <h3>Neleman Cava</h3>
                                    <p>Branding, Video</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="work-item graphic printing">
                <div class="work-detail">
                    <a href="portfolio-single-1.html">
                        <img src="{{ asset('/') }}comet/images/portfolio/7.jpg" alt="">
                        <div class="work-info">
                            <div class="centrize">
                                <div class="v-center">
                                    <h3>Sweet Lane</h3>
                                    <p>Graphic, Printing</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="work-item printing branding">
                <div class="work-detail">
                    <a href="portfolio-single-1.html">
                        <img src="{{ asset('/') }}comet/images/portfolio/6.jpg" alt="">
                        <div class="work-info">
                            <div class="centrize">
                                <div class="v-center">
                                    <h3>Jeff Burger</h3>
                                    <p>Printing, Branding</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="work-item video graphic">
                <div class="work-detail">
                    <a href="portfolio-single-1.html">
                        <img src="{{ asset('/') }}comet/images/portfolio/9.jpg" alt="">
                        <div class="work-info">
                            <div class="centrize">
                                <div class="v-center">
                                    <h3>Juice Meds</h3>
                                    <p>Video, Graphic</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="work-item branding graphic">
                <div class="work-detail">
                    <a href="portfolio-single-1.html">
                        <img src="{{ asset('/') }}comet/images/portfolio/11.jpg" alt="">
                        <div class="work-info">
                            <div class="centrize">
                                <div class="v-center">
                                    <h3>Prisma</h3>
                                    <p>Graphic, Branding</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="work-item printing graphic">
                <div class="work-detail">
                    <a href="portfolio-single-1.html">
                        <img src="{{ asset('/') }}comet/images/portfolio/10.jpg" alt="">
                        <div class="work-info">
                            <div class="centrize">
                                <div class="v-center">
                                    <h3>Delirio Tropical</h3>
                                    <p>Printing, Graphic</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="work-item printing branding">
                <div class="work-detail">
                    <a href="portfolio-single-1.html">
                        <img src="{{ asset('/') }}comet/images/portfolio/8.jpg" alt="">
                        <div class="work-info">
                            <div class="centrize">
                                <div class="v-center">
                                    <h3>Amendoas</h3>
                                    <p>Printing, Branding</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="work-item graphic video">
                <div class="work-detail">
                    <a href="portfolio-single-1.html">
                        <img src="{{ asset('/') }}comet/images/portfolio/3.jpg" alt="">
                        <div class="work-info">
                            <div class="centrize">
                                <div class="v-center">
                                    <h3>Hnina</h3>
                                    <p>Graphic, Video</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- end of portfolio grid-->
    </div>
</section>
<section>
    <div class="container">
        <div class="title center">
            <h4 class="upper">{{ $clients->tagline }}</h4>
            <h3>{{ $clients->title }}<span class="red-dot"></span></h3>
            <hr>
        </div>
        <div class="section-content">
            <div class="boxes clients">
                <div class="row">
                    <div class="col-sm-4 col-xs-6 border-right border-bottom">
                        <img src="{{ asset('/') }}media/images/clients/{{ $clients->cl1 }}" alt="" data-animated="true"
                            class="client-image">
                    </div>
                    <div class="col-sm-4 col-xs-6 border-right border-bottom">
                        <img src="{{ asset('/') }}media/images/clients/{{ $clients->cl2 }}" alt="" data-animated="true"
                            data-delay="500" class="client-image">
                    </div>
                    <div class="col-sm-4 col-xs-6 border-bottom">
                        <img src="{{ asset('/') }}media/images/clients/{{ $clients->cl3 }}" alt="" data-animated="true"
                            data-delay="1000" class="client-image">
                    </div>
                    <div class="col-sm-4 col-xs-6 border-right">
                        <img src="{{ asset('/') }}media/images/clients/{{ $clients->cl4 }}" alt="" data-animated="true"
                            class="client-image">
                    </div>
                    <div class="col-sm-4 col-xs-6 border-right">
                        <img src="{{ asset('/') }}media/images/clients/{{ $clients->cl5 }}" alt="" data-animated="true"
                            data-delay="500" class="client-image">
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <img src="{{ asset('/') }}media/images/clients/{{ $clients->cl6 }}" alt="" data-animated="true"
                            data-delay="1000" class="client-image">
                    </div>
                </div>
                <!-- end of row-->
            </div>
        </div>
        <!-- end of section content-->
    </div>
</section>
<section class="parallax">
    <div data-parallax="scroll" data-image-src="{{ asset('/') }}comet/images/bg/7.jpg" class="parallax-bg"></div>
    <div class="parallax-overlay pb-50 pt-50">
        <div class="container">
            <div class="title center">
                <h3>{{ $testimonials -> test_title }}<span class="red-dot"></span></h3>
                <hr>
            </div>
            <div class="section-content">
                <div id="testimonials-slider"
                    data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true}"
                    class="flexslider nav-outside">
                    <ul class="slides">
                        @foreach ($testimonials -> all_slides as $slide)                     
                        <li>
                            <blockquote>
                                <p>"{{ $slide -> text }}"</p>
                                <footer>{{ $slide -> title }}</footer>
                            </blockquote>
                        </li>
                        @endforeach
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- end of container-->
    </div>
</section>
<section>
    <div class="container">
        <div class="title center">
            <h4 class="upper">We have a few tips for you.</h4>
            <h2>The Blog<span class="red-dot"></span></h2>
            <hr>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-post">
                        <div class="post-body">
                            <h3 class="serif"><a href="#">Checklists for Startups</a></h3>
                            <hr>
                            <p class="serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab corporis eos
                                quod libero doloremque odio perspiciatis ratione cumque ex laboriosam, laborum
                                accusantium quis quidem excepturi, adipisci neque, aliquam ea! [...]</p>
                            <div class="post-info upper"><a href="#">Read More</a><span
                                    class="pull-right black-text">November 16, 2015</span>
                            </div>
                        </div>
                        <!-- end of blog post-->
                    </div>
                    <div class="blog-post">
                        <div class="post-body">
                            <h3 class="serif"><a href="#">Never Tell People What You Do</a></h3>
                            <hr>
                            <p class="serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab corporis eos
                                quod libero doloremque odio perspiciatis ratione cumque ex laboriosam, laborum
                                accusantium quis quidem excepturi, adipisci neque, aliquam ea! [...]</p>
                            <div class="post-info upper"><a href="#">Read More</a><span
                                    class="pull-right black-text">November 12, 2015</span>
                            </div>
                        </div>
                        <!-- end of blog post-->
                    </div>
                </div>
            </div>
            <!-- end of row-->
            <div class="clearfix"></div>
            <div class="mt-25">
                <p class="text-center"><a href="#" class="btn btn-color-out">View Full Blog </a>
                </p>
            </div>
        </div>
        <!-- end of container-->
    </div>
</section>
@endsection
