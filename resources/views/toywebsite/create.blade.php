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
            <h1>Add New Product</h1>
            <form action="{{route('toy.store')}}" method="post">
                @csrf
                @include('toywebsite.InputField')
                <button type="submit" class="btn btn-primary" style="border-radius: 15px">Submit</button>
            </form>
        </div>
    </div>
@endsection
