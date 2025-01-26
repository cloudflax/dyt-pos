<div class="vertical-menu">

    <!-- Logo section -->
    <div class="navbar-brand-box">
        <!-- Dark logo -->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-dark-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="28">
            </span>
        </a>
        <!-- End dark logo -->

        <!-- Light logo -->
        <a href="index" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="30">
            </span>
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-light-sm.png') }}" alt="" height="26">
            </span>
        </a>
        <!-- End light logo -->
    </div>
    <!-- End logo section -->

    <!-- Menu button -->
    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>
    <!-- End menu button -->

    <!-- Sidebar menu scroll -->
    <div data-simplebar class="sidebar-menu-scroll">

        <!-- Sidebar menu -->
        <div id="sidebar-menu">

            <!-- Menu list -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- Dashboard section -->
                <li class="menu-title" data-key="t-menu">{{ trans_choice('labels.dashboard', 0) }}</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">{{ trans_choice('labels.dashboard', 1) }}</span>
                        <span class="badge rounded-pill bg-primary">1</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" data-key="t-ecommerce">{{ __('labels.ecommerce') }}</a></li>
                    </ul>
                </li>
                <!-- End dashboard section -->

                <!-- Pages section -->
                <li class="menu-title" data-key="t-pages">{{ trans_choice('labels.page', 1) }}</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-user-pin icon nav-icon"></i>
                        <span class="menu-item" data-key="t-authentication">{{ __('labels.authentication') }}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" data-key="t-login">{{ __('labels.login') }}</a></li>
                        <li><a href="auth-register" data-key="t-register">{{ __('labels.register') }}</a></li>
                        <li><a href="auth-recoverpw"
                                data-key="t-recover-password">{{ __('labels.recover_password') }}</a></li>
                        <li><a href="auth-lock-screen" data-key="t-lock-screen">{{ __('labels.lock_screen') }}</a>
                        </li>
                        <li><a href="auth-logout" data-key="t-logout">{{ __('labels.logout') }}</a></li>
                    </ul>
                </li>
                <!-- End pages section -->

            </ul>
            <!-- End menu list -->

        </div>
        <!-- End sidebar menu -->

    </div>
    <!-- End sidebar menu scroll -->

</div>
<!-- End vertical menu -->
