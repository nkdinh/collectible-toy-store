@extends('toywebsiteMaster.loginMaster')

@section('main')

    <section>
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="text-align: center">Sign up</h3>
                            <form action="{{route('user.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">

                                            <input type="text" id="fullName" name="fullName"
                                                   class="form-control form-control-lg"
                                                   value="{{old('fullName') ?? $user->fullName}}"/>
                                            <label class="form-label" for="fullName">Full Name</label>
                                            @error('fullName')
                                            <div class="alert alert-warning" role="alert">
                                                <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="email" id="email" name="email"
                                                   class="form-control form-control-lg"
                                                   value="{{old('email') ?? $user->email}}"/>
                                            <label class="form-label" for="email">Email</label>
                                            @error('email')
                                            <div class="alert alert-warning" role="alert">
                                                <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline">
                                            <input
                                                type="text" name="address"
                                                class="form-control form-control-lg"
                                                id="address"
                                                value="{{old('address') ?? $user->address}}"
                                            />
                                            <label for="address" class="form-label">Address</label>
                                            @error('address')
                                            <div class="alert alert-warning" role="alert">
                                                <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <select name="gender" id="gender" class="form-control" >
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <label class="form-label" for="gender">Gender</label>
                                        @error('gender')
                                        <div class="alert alert-warning" role="alert">
                                            <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                        </div>
                                        @enderror


                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="text" id="username" name="username"
                                                   class="form-control form-control-lg"
                                                   value="{{old('username') ?? $user->username}}"/>
                                            <label class="form-label" for="username">Username</label>
                                            @error('username')
                                            <div class="alert alert-warning" role="alert">
                                                <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="password" id="password" name="password"
                                                   class="form-control form-control-lg"
                                                   value="{{old('password') ?? $user->password}}"/>
                                            <label class="form-label" for="password">Password</label>
                                            @error('password')
                                            <div class="alert alert-warning" role="alert">
                                                <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit"/>
                                </div>

                                <div class="signup_link">
                                    Back to website? <a href="{{route('user.view')}}">Visit website</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
