@extends('toywebsiteMaster.ToyMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
@endsection


@section('main')
    @include('partials.adminNav')
    @include('partials.LeftNav');
    <div class="container-fluid">
        <div class="content-page" style="padding: 0 20px 100px 20px">
            <h1>Delete product</h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <!-- Product image -->
                                    <a href="javascript: void(0);" class="text-center d-block mb-4">
                                        <img src="{{$product[0]->img}}" class="img-fluid" style="min-width: 500px; max-height: 500px" alt="Product-img">
                                    </a>
                                </div> <!-- end col -->
                                <div class="col-lg-7">
                                    <form class="pl-lg-4">
                                        <!-- Product title -->
                                        <h3 class="mt-0">{{$product[0]->name}}</h3>
                                        <p class="font-16">
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                        </p>
                                        <!-- Product description -->

                                        <!-- Product description -->
                                        <div class="mt-4">
                                            <h6 class="font-14">Description:</h6>
                                            <p>{{$product[0]->description}} </p>
                                        </div>
                                    </form>
                                </div> <!-- end col -->
                            </div> <!-- end row-->

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <form action="{{route('toy.delete', ['id' =>$product[0]->p_id])}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger" style="border-radius: 15px">Delete</button>
                <a href="{{route('toy.index')}}" class="btn btn-info" style="border-radius: 15px">Cancel</a>
            </form>
        </div>
@endsection
