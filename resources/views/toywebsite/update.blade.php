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
                    <h1>Update product information</h1>
                    <form action="{{route('toy.update',['id'=> $products[0]->p_id])}}" method="post">
                        @csrf
                        @foreach($products as $each)
                            <div class="form-group">
                                <label for="simpleinput">Name</label>
                                <input type="text" id="simpleinput" class="form-control" name="name"
                                       value="{{$each->name}}">
                                @error('name')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="simpleinput">image</label>
                                <input type="file" id="simpleinput" class="form-control" name="img"
                                       value="{{$each->img}}">
                                @error('img')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="simpleinput">Description</label>
                                <input type="text" id="simpleinput" class="form-control" name="description"
                                       value="{{$each->description}}">
                                @error('Description')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="example-select">Category</label>
                                <select class="form-control" id="example-select" name="product_category_id">
                                    @foreach($category as $each)
                                        <option value=" {{ $each->id}}">{{$each->title}}</option>
                                    @endforeach
                                </select>
                                @error('Category')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary" style="border-radius: 15px">Update</button>
                    </form>
@endsection
