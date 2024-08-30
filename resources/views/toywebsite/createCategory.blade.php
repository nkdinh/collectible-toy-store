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
            <h1>Add New Category</h1>
            <form action="{{Route('toy.storeCategory')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="simpleinput">Product category</label>
                    <input type="text" class="form-control" name="title" id="simpleinput"
                           value="{{$product_category->product_category }}">
                    @error('product_category')
                    <div class="alert alert-warning" role="alert">
                        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                    </div>
                    @enderror
                    <button type="submit" class="btn btn-primary" style="border-radius: 15px; margin-top: 10px ">
                        Submit
                    </button>
                </div>
            </form>
            <table class="table table-striped table-centered mb-0 ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>title</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product_categories as $each)
                            <tr>
                                <td>
                                    {{$each->id}}
                                </td>
                                <td>
                                    {{$each->title}}
                                </td>

                        @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
@endsection
