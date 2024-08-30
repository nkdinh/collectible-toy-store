@extends('toywebsiteMaster.ToyMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
@endsection


@section('main')
    @include('partials.adminNav')
    @include('partials.LeftNav');
    <div class="container-fluid">
        <div class="content-page" style="padding: 0 0px 100px 0px">
            <div class="content">
                <div class="container-fluid">
                    <h1>Edit category</h1>
                    <form action="{{route('category.Edit',['id'=> $product_categories[0]->id])}}" method="post">
                        @csrf
                        @foreach($product_categories as $each)
                            <div class="form-group">
                                <label for="simpleinput">category</label>
                                <input type="text" id="simpleinput" class="form-control" name="category"
                                       value="{{$each->title}}">
                                @error('category')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary" style="border-radius: 15px">Update</button>
                    </form>
@endsection

