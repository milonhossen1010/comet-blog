@extends('backend.layouts.app')
@section("title","Admin")
@section('main')


    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-warning card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="navigation"
                                        class="font-warning"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Earnings</span>
                                <h3 class="mb-0">$ <span class="counter">6659</span><small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden  widget-cards">
                    <div class="bg-secondary card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="box"
                                        class="font-secondary"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Products</span>
                                <h3 class="mb-0">$ <span class="counter">9856</span><small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-primary card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="message-square"
                                        class="font-primary"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Messages</span>
                                <h3 class="mb-0">$ <span class="counter">893</span><small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-danger card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="users"
                                        class="font-danger"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">New Vendors</span>
                                <h3 class="mb-0">$ <span class="counter">45631</span><small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
     

        </div>
    </div>
    <!-- Container-fluid Ends-->


@endsection