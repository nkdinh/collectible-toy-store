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
            <h1>Admin Account</h1>
            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{$admin->Aid}}</dd>

                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">{{$admin->name}}</dd>

                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">{{$admin->email}}</dd>

                <dt class="col-sm-3">Phone</dt>
                <dd class="col-sm-9">{{$admin->phone}}</dd>

                <dt class="col-sm-3">Gender</dt>
                <dd class="col-sm-9">{{$admin->gender}}</dd>

                <dt class="col-sm-3">Username</dt>
                <dd class="col-sm-9">{{$admin->username}}</dd>

            </dl>
{{--            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#login-modal">Update</button>--}}
{{--            <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--                <div class="modal-dialog">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="modal-body">--}}
{{--                            <form action="{{Route('admin.verify'),Session::get('username')}}" class="pl-3 pr-3" method="post">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="password1">Password</label>--}}
{{--                                    <input class="form-control" type="password" required="" id="password1" placeholder="Enter your password" name="pwd">--}}
{{--                                </div>--}}
{{--                                <div class="form-group text-center">--}}
{{--                                    <button class="btn btn-rounded btn-primary" type="submit">Submit</button>--}}
{{--                                </div>--}}

{{--                            </form>--}}

{{--                        </div>--}}
{{--                    </div><!-- /.modal-content -->--}}
{{--                </div><!-- /.modal-dialog -->--}}
{{--            </div><!-- /.modal -->--}}
            <a href="{{route('admin.edit', Session::get('username') )}}" class="btn btn-danger mb-2"
               style="border-radius: 15px; background-color: #0eac5c; border-color: #0eac5c">Edit <i class="mdi mdi-pencil"></i> </a>
@endsection
