@extends('../layout/admindashboard') @section('title') {{$stone->storageitem}} - Deposited by {{$stone->depositor}} - @endsection
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
        @can('admin_dashboard')
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
        @endcan
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
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{$stone->storageitem}} - Deposited by {{$stone->depositor}}
        </h2>
        
    </div><br>
    <!-- BEGIN: Datatable -->
    <div class="intro-y box lg:mt-5">
        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">
                Storage Item Details
            </h2>
            <div class="dropdown relative ml-auto sm:hidden">
                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal w-5 h-5 text-gray-700"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg> </a>
                <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                    <div class="dropdown-box__content box p-2">
                        <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file w-4 h-4 mr-2"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Download Excel </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mb-2">
            <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        Depositor Name
                    </th>
                    <td>
                        {{$stone->depositor}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Stored Item
                    </th>
                    <td>
                        {{$stone->storageitem}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Weight
                    </th>
                    <td>
                        {{$stone->weight}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Amount/Quantity
                    </th>
                    <td>
                        {{$stone->quantity}}
                    </td>
                </tr>
                <tr>
                    <th>
                       Stored Item Status
                    </th>
                    <td>
                        <div class="flex items-center  {{$stone->status == 'Active' ? 'text-theme-9' : 'text-theme-6' }}">
                            <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{$stone->status }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                       Stored Date
                    </th>
                    <td>
                        {{$stone->created_at}}
                    </td>
                </tr>
                
            </tbody>
        </table>
        </div> 
    </div>
    <br><br>
    <a style="margin-top:20px;" class="button text-white bg-theme-1 shadow-md mr-2" href="{{ url()->previous() }}"> < Back </a> 
</div>
<!-- END: Content -->



@endsection
