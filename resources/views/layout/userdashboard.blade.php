<!DOCTYPE html>

<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8" />
        <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="Platinum Safe Private Fault" />
        <meta
            name="keywords"
            content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app"
        />
        <meta name="author" content="DanoiTech" />

        <title>Dashboard - Platinum Safe Private Fault</title>

        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img
                        alt="Platinum Safe Private Fault"
                        class="w-6"
                        src="{{ asset('dist/images/logo.svg') }}"
                    />
                    <span class="xl:block text-white text-lg ml-3 font-medium"
                        >Platinum Safe</span
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
                            <i data-feather="hexagon"></i>
                        </div>
                        <div class="menu__title">
                            Users
                        </div>
                    </a>
                </li>
                @endcan
                <li>
                    <a href="{{ route('storage.index') }}" class="menu">
                        <div class="menu__icon">
                            <i data-feather="hexagon"></i>
                        </div>
                        <div class="menu__title">
                            Precious Metal Storage
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('art.index') }}" class="menu">
                        <div class="menu__icon">
                            <i data-feather="box"></i>
                        </div>
                        <div class="menu__title">
                            Safety Deposit Box
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/arts" class="menu">
                        <div class="menu__icon">
                            <i data-feather="book-open"></i>
                        </div>
                        <div class="menu__title">
                            Fine Arts Storage
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex">
                        <a href="" class="">Application</a>
                        <i
                            data-feather="chevron-right"
                            class="breadcrumb__icon"
                        ></i>
                        <a href="" class="breadcrumb--active">Dashboard</a>
                    </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative mr-3 sm:mr-6"></div>
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                    <div
                        class="intro-x dropdown relative mr-auto sm:mr-6"
                    ></div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8 relative">
                        <div
                            class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                        >
                            <img
                                alt="Midone Laravel Admin Dashboard Starter Kit"
                                src="{{ asset('dist/images/profile-13.jpg') }}"
                            />
                        </div>
                        <div
                            class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20"
                        >
                            <div
                                class="dropdown-box__content box bg-theme-38 text-white"
                            >
                                <div class="p-4 border-b border-theme-40">
                                    <div class="font-medium">Adminstrator</div>
                                </div>
                                <div class="p-2 border-t border-theme-40">
                                    <a
                                        href="/logout"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"
                                    >
                                        <i
                                            data-feather="toggle-right"
                                            class="w-4 h-4 mr-2"
                                        ></i>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="grid grid-cols-12 gap-6">
                    <div
                        class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6"
                    >
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    General Report
                                </h2>
                                <a href="" class="ml-auto flex text-theme-1">
                                    <i
                                        data-feather="refresh-ccw"
                                        class="w-4 h-4 mr-3"
                                    ></i>
                                    Reload Data
                                </a>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div
                                    class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y"
                                >
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i
                                                    data-feather="hexagon"
                                                    class="report-box__icon text-theme-10"
                                                ></i>
                                                <div class="ml-auto"></div>
                                            </div>
                                            <div
                                                class="text-3xl font-bold leading-8 mt-6"
                                            >
                                                4.510
                                            </div>
                                            <div
                                                class="text-base text-gray-600 mt-1"
                                            >
                                                Precious Metal Storage
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y"
                                >
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i
                                                    data-feather="box"
                                                    class="report-box__icon text-theme-11"
                                                ></i>
                                                <div class="ml-auto"></div>
                                            </div>
                                            <div
                                                class="text-3xl font-bold leading-8 mt-6"
                                            >
                                                3.521
                                            </div>
                                            <div
                                                class="text-base text-gray-600 mt-1"
                                            >
                                                Safety Deposit Box
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y"
                                >
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i
                                                    data-feather="book-open"
                                                    class="report-box__icon text-theme-12"
                                                ></i>
                                                <div class="ml-auto"></div>
                                            </div>
                                            <div
                                                class="text-3xl font-bold leading-8 mt-6"
                                            >
                                                2.145
                                            </div>
                                            <div
                                                class="text-base text-gray-600 mt-1"
                                            >
                                                Fine Arts Storage
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: General Report -->
                        <!-- BEGIN: Weekly Top Seller -->
                        <div class="col-span-12 mt-6">
                            <div
                                class="intro-y block sm:flex items-center h-10"
                            >
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Latest Stored Items
                                </h2>
                            </div>
                            <div
                                class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0"
                            >
                                <table class="table table-report sm:mt-2">
                                    <thead>
                                        <tr>
                                            <th class="whitespace-no-wrap">
                                                Storage Item
                                            </th>
                                            <th class="whitespace-no-wrap">
                                                Depositor Name
                                            </th>
                                            <th
                                                class="text-center whitespace-no-wrap"
                                            >
                                                Weight
                                            </th>
                                            <th
                                                class="text-center whitespace-no-wrap"
                                            >
                                                STATUS
                                            </th>
                                            <th
                                                class="text-center whitespace-no-wrap"
                                            >
                                                ACTIONS
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="text-gray-600 text-xs whitespace-no-wrap"
                                                    >
                                                        Electronic
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-no-wrap"
                                                    >Robert De Niro</a
                                                >
                                            </td>
                                            <td class="text-center">85 kgs</td>
                                            <td class="w-40">
                                                <div
                                                    class="flex items-center justify-center text-theme-9"
                                                >
                                                    <i
                                                        data-feather="check-square"
                                                        class="w-4 h-4 mr-2"
                                                    ></i>
                                                    Active
                                                </div>
                                            </td>
                                            <td
                                                class="table-report__action w-56"
                                            >
                                                <div
                                                    class="flex justify-center items-center"
                                                >
                                                    <a
                                                        class="flex items-center mr-3"
                                                        href=""
                                                    >
                                                        <i
                                                            data-feather="check-square"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        View
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="text-gray-600 text-xs whitespace-no-wrap"
                                                    >
                                                        Photography
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-no-wrap"
                                                    >Johnny Depp</a
                                                >
                                            </td>
                                            <td class="text-center">84 kgs</td>
                                            <td class="w-40">
                                                <div
                                                    class="flex items-center justify-center text-theme-6"
                                                >
                                                    <i
                                                        data-feather="check-square"
                                                        class="w-4 h-4 mr-2"
                                                    ></i>
                                                    Inactive
                                                </div>
                                            </td>
                                            <td
                                                class="table-report__action w-56"
                                            >
                                                <div
                                                    class="flex justify-center items-center"
                                                >
                                                    <a
                                                        class="flex items-center mr-3"
                                                        href=""
                                                    >
                                                        <i
                                                            data-feather="check-square"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        View
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="text-gray-600 text-xs whitespace-no-wrap"
                                                    >
                                                        Sport &amp; Outdoor
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-no-wrap"
                                                    >Tom Cruise</a
                                                >
                                            </td>
                                            <td class="text-center">50 kgs</td>
                                            <td class="w-40">
                                                <div
                                                    class="flex items-center justify-center text-theme-9"
                                                >
                                                    <i
                                                        data-feather="check-square"
                                                        class="w-4 h-4 mr-2"
                                                    ></i>
                                                    Active
                                                </div>
                                            </td>
                                            <td
                                                class="table-report__action w-56"
                                            >
                                                <div
                                                    class="flex justify-center items-center"
                                                >
                                                    <a
                                                        class="flex items-center mr-3"
                                                        href=""
                                                    >
                                                        <i
                                                            data-feather="check-square"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        View
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="text-gray-600 text-xs whitespace-no-wrap"
                                                    >
                                                        Electronic
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-no-wrap"
                                                    >Al Pacino</a
                                                >
                                            </td>
                                            <td class="text-center">50 kgs</td>
                                            <td class="w-40">
                                                <div
                                                    class="flex items-center justify-center text-theme-6"
                                                >
                                                    <i
                                                        data-feather="check-square"
                                                        class="w-4 h-4 mr-2"
                                                    ></i>
                                                    Inactive
                                                </div>
                                            </td>
                                            <td
                                                class="table-report__action w-56"
                                            >
                                                <div
                                                    class="flex justify-center items-center"
                                                >
                                                    <a
                                                        class="flex items-center mr-3"
                                                        href=""
                                                    >
                                                        <i
                                                            data-feather="check-square"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        View
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="text-gray-600 text-xs whitespace-no-wrap"
                                                    >
                                                        Photography
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-no-wrap"
                                                    >Arnold Schwarzenegger</a
                                                >
                                            </td>
                                            <td class="text-center">55 kgs</td>
                                            <td class="w-40">
                                                <div
                                                    class="flex items-center justify-center text-theme-6"
                                                >
                                                    <i
                                                        data-feather="check-square"
                                                        class="w-4 h-4 mr-2"
                                                    ></i>
                                                    Inactive
                                                </div>
                                            </td>
                                            <td
                                                class="table-report__action w-56"
                                            >
                                                <div
                                                    class="flex justify-center items-center"
                                                >
                                                    <a
                                                        class="flex items-center mr-3"
                                                        href=""
                                                    >
                                                        <i
                                                            data-feather="check-square"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        View
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END: Weekly Top Seller -->
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>
