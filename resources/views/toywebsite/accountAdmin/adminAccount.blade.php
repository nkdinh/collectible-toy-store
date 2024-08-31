@extends('toywebsiteMaster.ToyMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
@endsection
@section('main')
    @include('partials.adminNav')
    @include('partials.LeftNav');

    <div class="container-fluid">
        <div class="content-page" style="padding: 0 0 100px 0">
            <div class="content">
                <div class="container-fluid">
                    <h1>Admin Management</h1>
                    <table class="table table-striped table-centered mb-0 ">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admin as $admin)
                            <tr>
                                <td>
                                    {{$admin->name}}
                                </td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->phone}}</td>
                                <td>{{$admin->gender}}</td>
                                <td>{{$admin->username}}</td>
                                <td>**************</td>
                                {{--                                <td class="table-action">--}}
                                {{--                                    <a href="{{route('user.edit',['id'=>$user->Cid])}}" class="action-icon">--}}
                                {{--                                        <i class="mdi mdi-pencil"></i></a>--}}
                                {{--                                    <a href="{{route('user.confirm',['id'=>$user->Cid])}}" class="action-icon">--}}
                                {{--                                        <i class="mdi mdi-delete"></i></a>--}}
                                {{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

