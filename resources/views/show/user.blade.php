@extends('../layout/admindashboard') @section('title', 'Safety Deposit Box - ')
@section('nav')
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img
            alt="Platinum Safe Private Fault"
            class="w-6"
            src="{{ asset('dist/images/logo.svg') }}"
        />
        <span class="hidden xl:block text-white text-lg ml-3 font-medium"
            >Platinum Safe</span
        >
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="/" class="side-menu ">
                <div class="side-menu__icon">
                    <i data-feather="home"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('users.index') }}" class="side-menu side-menu--active">
                <div class="side-menu__icon">
                    <i data-feather="user"></i>
                </div>
                <div class="side-menu__title">
                   Users
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('stones.index') }}" class="side-menu ">
                <div class="side-menu__icon">
                    <i data-feather="hexagon"></i>
                </div>
                <div class="side-menu__title">
                    Precious Metal Storage
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('storage.index') }}" class="side-menu ">
                <div class="side-menu__icon">
                    <i data-feather="box"></i>
                </div>
                <div class="side-menu__title">
                    Safety Deposit Box
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('art.index') }}" class="side-menu ">
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

</div>
<!-- END: Content -->



@endsection
