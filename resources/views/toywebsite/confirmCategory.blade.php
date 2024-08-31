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
            <h1>Delete this category?</h1>

            <form action="{{route('product_categories.delete', ['id' =>$product_category[0]->id])}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger"  style="border-radius: 15px">Delete</button>
                <a href="{{route('toy.getCategories')}}" class="btn btn-info" style="border-radius: 15px">Cancel</a>
            </form>

        </div>
@endsection
