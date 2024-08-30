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
            <h1>Edit Customers</h1>
            <form action="{{route('user.update',['id'=> $users[0]->Cid])}}" method="post">
                @csrf
                @foreach($users as $user)
                    <div class="form-group">
                        <label for="simpleinput">Name</label>
                        <input type="text" id="simpleinput" class="form-control" name="fullName"
                               value="{{$user->customer_name}}">
                        @error('fullName')
                        <div class="alert alert-warning" role="alert">
                            <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="simpleinput">Email</label>
                        <input type="text" id="simpleinput" class="form-control" name="email"
                               value="{{$user->email}}">
                        @error('email')
                        <div class="alert alert-warning" role="alert">
                            <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <input
                            type="text" name="address"
                            class="form-control"
                            id="address"
                            value="{{$user->address}}"
                        />
                        @error('address')
                        <div class="alert alert-warning" role="alert">
                            <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
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
                        @error('gender')
                        <div class="alert alert-warning" role="alert">
                            <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>

                @endforeach

                <button type="submit" class="btn btn-primary" style="border-radius: 15px">Update</button>
            </form>
@endsection
