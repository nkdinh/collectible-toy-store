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
            <h1>Delete Customer</h1>

            <form action="{{route('user.delete', ['id' =>$user[0]->Cid])}}" method="post">
                @csrf
                {{--            <input type="hidden" name="id" value="{{$book->id}}">--}}
                {{--                @foreach($pets as $pet)--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="simpleinput" value="{{$pet->name}}>Name</label>--}}
                {{--                        <input type="text" id="simpleinput" class="form-control" name="name" ">--}}
                {{--                    </div>--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="simpleinput">Area</label>--}}
                {{--                        <input type="text" id="simpleinput" class="form-control" name="area" value="{{$pet->area}}">--}}
                {{--                    </div>--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="example-select">Breed</label>--}}
                {{--                        <select class="form-control" id="example-select" name="Breed">--}}
                {{--                            @foreach($breed as $each)--}}
                {{--                                <option value=" {{ $each->id}}">{{$each->bread}}</option>--}}
                {{--                            @endforeach--}}
                {{--                        </select>--}}
                {{--                        <div>--}}
                {{--                            --}}{{--                {{dd($breed)}}--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="example-select">Gender</label>--}}
                {{--                        <select name="gender" id="example-select" class="form-control" name="gender">--}}
                {{--                            <option value="1">Male</option>--}}
                {{--                            <option value="0">Female</option>--}}
                {{--                        </select>--}}
                {{--                    </div>--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="simpleinput">image</label>--}}
                {{--                        <input type="file" id="simpleinput" class="form-control" name="image" value="{{$pet->image}}">--}}
                {{--                    </div>--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="simpleinput">Color</label>--}}
                {{--                        <input type="text" id="simpleinput" class="form-control" name="color" value="{{$pet->color}}">--}}
                {{--                    </div>--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="simpleinput">Detail</label>--}}
                {{--                        <input type="text" id="simpleinput" class="form-control" name="detail" value="{{$pet->Detail}}">--}}
                {{--                    </div>--}}
                {{--                @endforeach--}}
                <button type="submit" class="btn btn-danger"  style="border-radius: 15px">Delete</button>
                <a href="{{route('toy.index')}}" class="btn btn-info" style="border-radius: 15px">Cancel</a>
            </form>
        </div>
@endsection
