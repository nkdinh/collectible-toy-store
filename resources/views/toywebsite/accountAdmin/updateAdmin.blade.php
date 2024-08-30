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
            @error('password')
            <div class="modal-content modal-filled bg-danger">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="dripicons-wrong h1"></i>
                        <h4 class="mt-2">Oh snap!</h4>
                        <p class="mt-3"><strong>{{$message}}</strong></p>
                    </div>
                </div>
            </div><!-- /.modal-content -->
            @enderror
            <h1>Edit Admin</h1>
            <form action="{{route('admin.update', Session::get('username'))}}" method="post">
                @csrf
                <div class="form-group">
                    {{--                    <label for="simpleinput">Name</label>--}}
                    <input type="hidden" id="simpleinput" class="form-control" name="username"
                           value="{{Session::get('username')}}">
                </div>
                <div class="form-group">
                    <label for="simpleinput">Email</label>
                    <input type="text" id="simpleinput" class="form-control" name="email"
                           value="{{$admin->email}}">
                    @error('email')
                    <div class="alert alert-warning bg-white text-warning" role="alert">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address" class="form-label">Phone</label>
                    <input
                            type="text" name="phone"
                            class="form-control"
                            id="address"
                            value="{{$admin->phone}}">
                    @error('phone')
                    <div class="alert alert-warning bg-white text-warning" role="alert">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="example-select">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#login-modal">Update
                </button>
                <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="{{route('admin.update', Session::get('username'))}}" class="pl-3 pr-3"
                                      method="post">
                                    <div class="form-group">
                                        <label for="password1">Password</label>
                                        <input class="form-control" type="password" required="" id="password1"
                                               placeholder="Enter your password" name="password">
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-rounded btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </form>
        </div>
    </div>
@endsection
