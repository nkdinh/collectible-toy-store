@extends('toywebsiteMaster.loginMaster')
{{--@include('partials.Errors')--}}
@section('main')
    <div class="center">
        <h1>Login</h1>
        <form method="post" action="{{route('admin.login')}}">
            @csrf
            <div class="txt_field">
                <input type="text" name="username" id="username" value="{{old('username')}}">
                @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <span></span>
                <label>Password</label>
            </div>
            @error('msg')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="submit" value="Login" style="margin-bottom: 50px">

{{--            <div class="signup_link">--}}
{{--                Not a member? <a href="{{route('user.register')}}">Sign up</a>--}}
{{--            </div>--}}
        </form>
    </div>
@endsection
