@extends('UserView.UserMaster.UserMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/jquery-jvectormap-1.2.2.css')}}">
@endsection

@section('main')
    {{--    @include('UserView.Partial.leftnav')--}}
    @include('UserView.Partial.navbar')
    {{--@include('UserView.Partial.leftnav')--}}
    <div id="carouselExampleControls" class="carousel slide "
         data-ride="carousel" style="height: 500px">
        <div class="carousel-inner" role="listbox" style="height: 100%; width: 100%">
            <div class="carousel-item ">
                <img class="d-block img-fluid mx-auto"
                     src="https://c4.wallpaperflare.com/wallpaper/672/529/128/gundam-gundam-aerial-suletta-mercury-hd-wallpaper-preview.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block" style="height: 100%;">

                </div>
            </div>
            <div class="carousel-item active">
                <img class="d-block img-fluid mx-auto"
                     src="https://i.pinimg.com/originals/f7/ba/57/f7ba57519727e57bf9f11c4233d2d2ce.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block" style="height: 100%;">

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid mx-auto"
                     src="https://i.pinimg.com/originals/fc/34/9f/fc349f77c43755e9de0592df74e5aa08.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block" style="height: 100%;">

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
           data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
           data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid mm-active">
        <div class="wrapper mm-show">
            <div class="content-page">
                <div class="content">
                    <div class="row">
                        @foreach($products as $each)
                            <div class="col-md-6 col-xl-3" >
                                <!-- project card -->
                                <div class="card d-block text-dark" style="width: 300px; height: 300px; margin: 50px 50px; box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.25),
  0 5px 15px 0 rgba(0, 0, 0, 0.12)">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="{{$each->img}}"
                                         alt="project image cap" style="height: 100%; width:100%">

                                    <div class="card-body position-relative" style="padding-left: unset; padding-right: unset; margin-bottom: 9px ">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="{{Route('Product.Detail',['id'=>$each->p_id])}}"
                                               class="text-title">{{$each->name}}</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <i class=" dripicons-star"></i>
                                                <b>{{$each->product_category_id}}</b>
                                            </span>

                                            <span class="text-nowrap">
                                                <i class="uil-meh-alt"></i>
                                                <b>{{$each->description}}</b>
                                            </span>
                                        </p>

                                        <!-- project progress-->
                                        <p class="mb-2 font-weight-bold">Most people like <span
                                                class="float-right">45%</span>
                                        </p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="45"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            </div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                        @endforeach<!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('UserView.Partial.footer')
@endsection
