<div class="navbar-custom topnav-navbar topnav-navbar-dark" style="position: sticky">

    <div class="container-fluid">

        <!-- LOGO -->
        <a href="{{Route('user.view')}}" class="topnav-logo">
                                <span class="topnav-logo-lg">
                                    <img src="{{asset('images/pecaden.png')}}" alt="logo" height="40px">
                                </span>
            <span class="topnav-logo-sm">
                                    <img src="{{asset('images/pecaden.png')}}" alt="" height="40px">
                                </span>
        </a>
        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <li class="dropdown notification-list d-lg-none show">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="true">
                    <i class="dripicons-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0 show"
                     style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(10px, 70px, 0px);"
                     x-placement="bottom-start">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..."
                               aria-label="Recipient's username" name="product_name">
                    </form>
                </div>
            </li>
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop"
                   href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="account-user-avatar">
                                            <img src="https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg" alt="user-image"
                                                 class="rounded-circle">
                                        </span>

                    <span class="account-user-name">
                                                {{\Illuminate\Support\Facades\Session::has('clientUsername')?
                        \Illuminate\Support\Facades\Session::get('clientUsername') : ''}}
                                            <span class="account-position">Unknow user</span>
                                        </span>
                </a>
                <div
                        class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
                        aria-labelledby="topbar-userdrop" style="">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{route('client.my-account', Session::get('clientUsername') )}}" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-circle mr-1"></i>
                        <span>My Account</span>
                    </a>
                    <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout mr-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <li class="dropdown notification-list d-lg-none show">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="true">
                    <i class="dripicons-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0 show"
                     style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(10px, 70px, 0px);"
                     x-placement="bottom-start">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..."
                               aria-label="Recipient's username" name="product_name">
                    </form>
                </div>
            </li>

        </ul>
        <div class="app-search dropdown">
            <form action="{{route('user.FindProductByName')}}" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." id="top-search"
                           style="border-radius: 15px; margin-right: 15px" name="product_name">
                    <span class="mdi mdi-magnify search-icon"></span>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" style="border-radius: 15px">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <ul class="list-unstyled topbar-right-menu float-left mb-0">
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="uil-github"></i>
                    <span class="align-middle d-none d-sm-inline-block" style="font-size: 17px">Categories</span> <i
                        class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu">
                    <!-- item-->
                    @foreach($product_categories as $each)
                        <a href="{{Route('FilterProduct',[$each->id])}}" class="dropdown-item notify-item">
                            <span class="align-middle">{{$each->title}}</span>
                        </a>
                    @endforeach
                </div>

            </li>
        </ul>
        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <li class="dropdown notification-list topbar-dropdown">
                <a href="{{route('user.aboutus')}}" class="nav-link " role="button" style="font-size: 17px; margin: 0 15px"><i class="dripicons-location"></i> About Us</a>
            </li>
            <li class="dropdown notification-list topbar-dropdown">
                <a href="{{route('user.tip')}}" class="nav-link dropdown-toggle arrow-none" role="button" style="font-size: 17px; margin: 0 15px"><i class=" mdi mdi-bookshelf"></i> Tips</a>
            </li>
            <li class="dropdown notification-list topbar-dropdown">
                <a href="{{route('user.gallery')}}" class="nav-link dropdown-toggle arrow-none"
                   role="button" style="font-size: 17px; margin: 0 15px"><i class="mdi mdi-dog"></i> Gallery</a>
            </li>

        </ul>

    </div>
</div>





