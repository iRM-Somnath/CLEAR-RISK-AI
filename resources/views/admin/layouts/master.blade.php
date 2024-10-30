<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>CLEAR RISK : {{ $title??'' }}</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/stylesheets/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/stylesheets/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/stylesheets/theme-custom.css') }}">
    @stack('admin-css')
    <!-- Head Libs -->
    <script src="{{ asset('admin/assets/vendor/modernizr/modernizr.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script>
        let baseUrl = "{{ url('admin') }}/";
        let lang = "en";
        let _token = "{{ csrf_token() }}";
    </script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../1.7.0" class="logo">
                    <img src="{{asset('front/assets/images/Optimized-Images/navimage-66dad39351057.webp')}}" width="75" height="35"
                        alt="Porto Admin" />
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">



                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="{{ asset('admin/assets/images/!logged-user.jpg ') }}" alt="Joseph Doe"
                                class="img-circle"
                                data-lock-picture="{{ asset('admin/assets/images/!logged-user.jpg ') }}" />
                        </figure>
                        <div class="profile-info" data-lock-name="{{ Auth::user()->name }}" data-lock-email="{{ Auth::user()->email }}">
                            <span class="name">{{ Auth::user()->name }}</span>
                            <span class="role">Administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i
                                        class="fa fa-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i
                                        class="fa fa-lock"></i> Lock Screen</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="{{ url('admin/logout') }}"><i
                                        class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                        data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">

                            <ul class="nav nav-main">
                                <li>
                                    <a href="layouts-default.html">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-parent">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Pricing Management</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="{{ url("admin/pricing") }}">
                                                List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url("admin/pricing/add") }}">
                                               add
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>FAQ Management</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="{{ url("admin/faqs") }}">
                                                List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url("admin/faqs/add") }}">
                                               Add
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a href="#">
                                        <i class="fa fa-columns" aria-hidden="true"></i>
                                        <span>Layouts</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="index.html">
                                                Landing Page
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-default.html">
                                                Default
                                            </a>
                                        </li>
                                        <li class="nav-parent">
                                            <a>
                                                Boxed
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a href="layouts-boxed.html">
                                                        Static Header
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="layouts-boxed-fixed-header.html">
                                                        Fixed Header
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>


                                    </ul>
                                </li>


                            </ul>
                        </nav>
                    </div>

                    <script>
                        // Maintain Scroll Position
                        if (typeof localStorage !== 'undefined') {
                            if (localStorage.getItem('sidebar-left-position') !== null) {
                                var initialPosition = localStorage.getItem('sidebar-left-position'),
                                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                                sidebarLeft.scrollTop = initialPosition;
                            }
                        }
                    </script>


                </div>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>{{ $title??'' }}</h2>

                    {{-- <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Pages</span></li>
                            <li><span>Blank Page</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i
                                class="fa fa-chevron-left"></i></a>
                    </div> --}}
                </header>

                <!-- start: page -->
                @yield('content')
                <!-- end: page -->
            </section>
        </div>


    </section>

    <!-- Vendor -->
    <script src="{{ asset('admin/assets/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery-placeholder/jquery-placeholder.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('admin/assets/javascripts/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('admin/assets/javascripts/theme.custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('admin/assets/javascripts/theme.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="{{ asset('common/js/index.js') }}"></script>
    @stack('admin-js')
</body>

</html>
