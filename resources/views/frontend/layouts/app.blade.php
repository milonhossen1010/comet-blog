@include('frontend.layouts.particals.head')

  <body>
    <!-- Preloader-->
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Preloader-->

  
    <!-- Navigation Bar-->
  @include('frontend.layouts.header')
    <!-- End Navigation Bar-->

    
 @section('frontend-main')
     
 @show



  <!-- Footer-->
@include('frontend.layouts.footer')
  <!-- end of footer-->
@include('frontend.layouts.particals.script')