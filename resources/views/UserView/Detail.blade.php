@extends('UserView.UserMaster.UserMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
@endsection
@section('main')
    @include('UserView.Partial.navbar')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Product image -->
                            <a href="#" class="text-center d-block mb-4">
                                <img src="{{$products[0]->img}}" class="img-fluid" style="max-width: 100%; max-height: 500px" alt="Product-img">
                            </a>

                        </div> <!-- end col -->
                        <div class="col-lg-7">
                            <form class="pl-lg-4">
                                <!-- Product title -->
                                <h3 class="mt-0">{{$products[0]->name}}</h3>
                                <p class="mb-1">Added Date: 25/04/2022</p>
                                <p class="font-16">
                                    <span class="text-warning mdi mdi-star"></span>
                                    <span class="text-warning mdi mdi-star"></span>
                                    <span class="text-warning mdi mdi-star"></span>
                                    <span class="text-warning mdi mdi-star"></span>
                                    <span class="text-warning mdi mdi-star"></span>
                                </p>

                                <!-- Product stock -->
                                <div class="mt-3">
                                    <h4><span class="badge badge-success-lighten">Available</span></h4>
                                </div>

                                <!-- Product description -->
                                <div class="mt-4">
                                    <h6 class="font-14">Category</h6>
                                    <h3>{{$products[0]->product_category_id}}</h3>
                                </div>


                                <!-- Product description -->
                                <div class="mt-4">
                                    <h6 class="font-14">Description:</h6>
                                    <p>{{$products[0]->description}}</p>
                                </div>

                                <!-- Product information -->


                            </form>
                        </div> <!-- end col -->
                    </div> <!-- end row-->


                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>

@include('UserView.Partial.footer')
@endsection
