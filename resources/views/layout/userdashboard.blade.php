<!DOCTYPE html>

<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8" />
        <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="PLATINUM SAFE PRIVATE VAULT" />
        
        <meta name="author" content="DanoiTech" />

        <title>@yield('title')  PLATINUM SAFE PRIVATE VAULT</title>

        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="/" class="flex mr-auto">
                    <img
                        alt="PLATINUM SAFE PRIVATE VAULT"
                        class="w-6"
                        src="{{ asset('dist/images/logo.svg') }}"
                    />
                    <span class="xl:block text-white text-lg ml-3 font-medium"
                        >PLATINUM SAFE PRIVATE VAULT</span
                    >
                </a>
                <a href="javascript:;" id="mobile-menu-toggler">
                    <i
                        data-feather="bar-chart-2"
                        class="w-8 h-8 text-white transform -rotate-90"
                    ></i>
                </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="/" class="menu menu--active">
                        <div class="menu__icon">
                            <i data-feather="home"></i>
                        </div>
                        <div class="menu__title">
                            Dashboard
                        </div>
                    </a>
                </li>
                @can('admin_dashboard')
                <li>
                    <a href="{{ route('users.index') }}" class="menu">
                        <div class="menu__icon">
                            <i data-feather="user"></i>
                        </div>
                        <div class="menu__title">
                            Users
                        </div>
                    </a>
                </li>
                @endcan
                <li>
                    <a href="{{ route('stones.index') }}" class="menu">
                        <div class="menu__icon">
                            <i data-feather="hexagon"></i>
                        </div>
                        <div class="menu__title">
                            Precious Metal Storage
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('storage.index') }}" class="menu">
                        <div class="menu__icon">
                            <i data-feather="box"></i>
                        </div>
                        <div class="menu__title">
                            Safety Deposit Box
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('art.index') }}" class="menu">
                        <div class="menu__icon">
                            <i data-feather="book-open"></i>
                        </div>
                        <div class="menu__title">
                            Fine Arts Storage
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/logout" class="menu">
                        <div class="menu__icon">
                            <i data-feather="box"></i>
                        </div>
                        <div class="menu__title">
                            Logout
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            @yield('nav')
            <!-- END: Side Menu -->
            @yield('body')
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=['your-google-map-api']&libraries=places"></script>
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
