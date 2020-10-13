@extends('../layout/admindashboard') @section('title', 'Dashboard - ')
@section('nav')
<nav class="side-nav">
    <a href="/" class="intro-x flex items-center pl-5 pt-4">
        <img
            alt="Platinum Safe Private Fault"
            class="w-6"
            src="{{asset('dist/images/logo.svg')}}"
        />
        <span class="hidden xl:block text-white text-lg ml-3 font-medium"
            >PLATINUM SAFE PRIVATE VAULT</span
        >
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="/" class="side-menu side-menu--active">
                <div class="side-menu__icon">
                    <i data-feather="home"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('users.index') }}" class="side-menu ">
                <div class="side-menu__icon">
                    <i data-feather="user"></i>
                </div>
                <div class="side-menu__title">
                   Users
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('stones.index') }}" class="side-menu">
                <div class="side-menu__icon">
                    <i data-feather="hexagon"></i>
                </div>
                <div class="side-menu__title">
                    Precious Metal Storage
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('storage.index') }}" class="side-menu">
                <div class="side-menu__icon">
                    <i data-feather="box"></i>
                </div>
                <div class="side-menu__title">
                    Safety Deposit Box
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('art.index') }}" class="side-menu">
                <div class="side-menu__icon">
                    <i data-feather="book-open"></i>
                </div>
                <div class="side-menu__title">
                    Fine Arts Storage
                </div>
            </a>
        </li>
    </ul>
</nav>
@endsection @section('body')
<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex">
            <a href="/" class="">Platinum Safe Private Vault</a>
            <i data-feather="chevron-right" class="breadcrumb__icon"></i>
            <a href="/" class="breadcrumb--active">Dashboard</a>
        </div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        <div class="intro-x relative mr-3 sm:mr-6"></div>
        <!-- END: Search -->
        <!-- BEGIN: Notifications -->
        <div class="intro-x dropdown relative mr-auto sm:mr-6"></div>
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
            <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                <div class="dropdown-box__content box bg-theme-38 text-white">
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
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <a href="" class="ml-auto flex text-theme-1">
                        <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i>
                        Reload Data
                    </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div
                        class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y"
                    >
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i
                                        data-feather="user"
                                        class="report-box__icon text-theme-10"
                                    ></i>
                                    <div class="ml-auto"></div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">
                                    {{ $countUser }}
                                </div>
                                <div class="text-base text-gray-600 mt-1">
                                    Users
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y"
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
                                <div class="text-3xl font-bold leading-8 mt-6">
                                    {{ $stones }}
                                </div>
                                <div class="text-base text-gray-600 mt-1">
                                    Precious Metal Storage
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y"
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
                                <div class="text-3xl font-bold leading-8 mt-6">
                                    {{ $storage }}
                                </div>
                                <div class="text-base text-gray-600 mt-1">
                                    Safety Deposit Box
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y"
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
                                <div class="text-3xl font-bold leading-8 mt-6">
                                    {{ $art }}
                                </div>
                                <div class="text-base text-gray-600 mt-1">
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
                <div class="intro-y block sm:flex items-center h-10">
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
                                    ID
                                </th>
                                <th class="whitespace-no-wrap">
                                    Name
                                </th>
                                <th class="text-center whitespace-no-wrap">
                                    Email
                                </th>
                                <th class="text-center whitespace-no-wrap">
                                    Gender
                                </th>
                                <th class="text-center whitespace-no-wrap">
                                    ACTIONS
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div
                                            class="text-gray-600 text-xs whitespace-no-wrap"
                                        >
                                            {{$user->id}}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a
                                        href=""
                                        class="font-medium whitespace-no-wrap"
                                        >{{$user->name}}</a
                                    >
                                </td>
                                <td class="text-center">{{$user->email}}</td>
                                <td class="text-center">{{$user->gender}}</td>
                                <td class="table-report__action w-56">
                                    <div
                                        class="flex justify-center items-center"
                                    >
                                        <a
                                            class="flex items-center mr-3"
                                            href="{{ route('users.show', $user->id) }}"
                                        >
                                            <i
                                                data-feather="eye"
                                                class="w-4 h-4 mr-1"
                                            ></i>
                                            View
                                        </a>
                                        <a
                                            class="flex items-center mr-3"
                                            href="{{ route('users.edit', $user->id) }}"
                                        >
                                            <i
                                                data-feather="edit-2"
                                                class="w-4 h-4 mr-1"
                                            ></i>
                                            Edit
                                        </a>
                                        <div class="text-center">
                                            <a
                                                href="javascript:;"
                                                data-toggle="modal"
                                                data-target="#delete-modal-preview"
                                                class="flex items-center mr-3"
                                                ><i
                                                    data-feather="trash"
                                                    class="w-4 h-4 mr-1"
                                                ></i>
                                                Delete</a
                                            >
                                        </div>
                                        <div
                                            class="modal"
                                            id="delete-modal-preview"
                                        >
                                            <div class="modal__content">
                                                <div class="p-5 text-center">
                                                    <i
                                                        data-feather="x-circle"
                                                        class="w-16 h-16 text-theme-6 mx-auto mt-3"
                                                    ></i>
                                                    <div class="text-3xl mt-5">
                                                        Are you sure?
                                                    </div>
                                                    <div
                                                        class="text-gray-600 mt-2"
                                                    >
                                                        Do you really want to
                                                        delete these records?
                                                        This process cannot be
                                                        undone.
                                                    </div>
                                                </div>
                                                <div
                                                    class="px-5 pb-8 text-center"
                                                >
                                                    <button
                                                        type="button"
                                                        data-dismiss="modal"
                                                        class="button w-24 border text-gray-700 mr-1"
                                                    >
                                                        Cancel
                                                    </button>

                                                    <form
                                                        action="{{ route('users.destroy', $user->id) }}"
                                                        method="POST"
                                                    >
                                                        <input
                                                            type="hidden"
                                                            name="_method"
                                                            value="DELETE"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            name="_token"
                                                            value="{{
                                                                csrf_token()
                                                            }}"
                                                        />
                                                        <button
                                                            type="submit"
                                                            class="button w-24 bg-theme-6 text-white"
                                                        >
                                                            <i
                                                                class="= feather icon-trash-2"
                                                            ></i>
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END: Weekly Top Seller -->
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection
