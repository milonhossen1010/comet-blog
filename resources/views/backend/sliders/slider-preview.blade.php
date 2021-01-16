@include('frontend.layouts.particals.style')
@php
$slide_data = json_decode($slider->all_slides);
$all_slides = $slide_data -> all_slides;
@endphp

<!-- Video background-->
<style>
    body.top-padding {
        padding-top: 0;
    }

</style>
<!---->
{{-- <section id="home">
    <div id="video-wrapper">
        <video autoplay="true" loop="true" preload="auto">
            <source src="{{ asset('/') }}{{ $slider -> slider_video }}" type="video/mp4">
            //<source src="{{ $slider -> slider_video }}" type="video/webm">
        </video>
    </div>


    <!-- end of video background-->
    <!-- Home slider-->
    <div id="home-slider" class="flexslider">
        <ul class="slides">
            @foreach ($all_slides as $slide)
            <li>
                <div class="slide-wrap">
                    <div class="slide-content bold-text">
                        <div class="container">
                            <h6>{{ $slide -> subtitle }}</h6>
                            <h1 class="upper smaller">{{ $slide -> title }}<span class="red-dot"></span></h1>
                            <p>
                                <a href="{{ $slide -> btn_one_link }}"
                                    class="btn btn-color">{{ $slide -> btn_one_title }}</a>
                                <a href="{{ $slide -> btn_two_link }}"
                                    class="btn btn-light-out">{{ $slide -> btn_two_title }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>
</section> --}}


    <!-- end of home slider-->

    <section id="home">
        <!-- Video background-->
        <div id="video-wrapper" data-fallback-bg="{{ $slider -> slider_video }}">
          <div data-property="{videoURL: '{{ $slider -> slider_video }}'}" class="player mb_YTVPlayer"></div>
        </div>
        <!-- end of video background-->
        <!-- Home Slider-->
        <div id="home-slider" class="flexslider">
          <ul class="slides">
            @foreach ($all_slides as $slide)
            <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"
                class="flex-active-slide">
                <div class="slide-wrap">
                    <div class="slide-content text-left bold-text">
                        <div class="container">
                            <h6>{{ $slide -> subtitle }}</h6>
                            <h1 class="upper">{{ $slide ->  title }}<span class="red-dot"></span></h1>
                            <p><a href="{{ $slide -> btn_one_link }}" class="btn btn-light-out">{{ $slide -> btn_one_title }}</a><a href="{{ $slide -> btn_two_link }}<"
                                    class="btn btn-color btn-full">{{ $slide -> btn_two_title }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
          </ul>
        <ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#"><i class="ti-angle-left"></i></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><i class="ti-angle-right"></i></a></li></ul></div>
        <!-- end of home slider-->
      </section>

    @include('frontend.layouts.particals.script')
