<div class="left-side-menu mm-show">

    <!-- LOGO -->
    {{--    <a href="index.html" class="logo text-center logo-light">--}}
    {{--        <span class="logo-lg">--}}
    {{--            <img src="{{asset('images/longlogo.jpg')}}" alt="" height="16">--}}
    {{--        </span>--}}
    {{--        <span class="logo-sm">--}}
    {{--            <img src="assets/images/logo_sm.png" alt="" height="16">--}}
    {{--        </span>--}}
    {{--    </a>--}}
    <div class="h-100 mm-active" id="left-side-menu-container" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <!--- Sidemenu -->
                            <ul class="metismenu side-nav mm-show">

                                <li class="side-nav-title side-nav-item">Navigation</li>

                                <li class="side-nav-item">
                                    <a href="{{route('toy.index')}}" class="side-nav-link">
                                        <i class="uil-home-alt"></i>
                                        <span> Toy store </span>
                                    </a>
                                </li>

                                <li class="side-nav-title side-nav-item">Information</li>

                                <li class="side-nav-item">
                                    <a href="{{route('user.account')}}" class="side-nav-link">
                                        <i class="mdi mdi-account-convert-outline"></i>
                                        <span> Customers </span>
                                    </a>
                                </li>

                                <li class="side-nav-item">
                                    <a href="{{route('admin.account')}}" class="side-nav-link">
                                        <i class="mdi mdi-account-cog"></i>
                                        <span> Admins </span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{route('toy.getCategories')}}" class="side-nav-link">
                                        <i class="mdi mdi-account-convert-outline"></i>
                                        <span> Toy categories </span>
                                    </a>
                                </li>
{{--                                <li class="side-nav-item">--}}
{{--                                    <a href="javascript: void(0);" class="side-nav-link" aria-expanded="false">--}}
{{--                                        <i class="uil-store"></i>--}}
{{--                                        <span> Ecommerce </span>--}}
{{--                                        <span class="menu-arrow"></span>--}}
{{--                                    </a>--}}
{{--                                    <ul class="side-nav-second-level mm-collapse" aria-expanded="false">--}}
{{--                                        <li>--}}
{{--                                            <a href="apps-ecommerce-products.html">Products</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="apps-ecommerce-products-details.html">Products Details</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
                            </ul>

                            <!-- End Sidebar -->

                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1543px;"></div>
        </div>
    </div>
    <!-- Sidebar -left -->

</div>
