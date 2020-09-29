@extends('../layout/admindashboard') @section('title', 'Users - ')
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
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            User List
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

                <a
                    href="javascript:;"
                    data-toggle="modal"
                    data-target="#header-footer-modal-preview"
                    class="button text-white bg-theme-1 shadow-md mr-2"
                    >Add New User</a
                >
            
            
        </div>
    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
                <tr>
                    <th class="border-b-2 whitespace-no-wrap"> ID</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">NAME</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">EMAIL</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">GENDER</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                <tr>
                    <td class="border-b">
                        <div class="font-medium whitespace-no-wrap">{{$user->id}}</div>
                    </td>
                    <td class="text-center border-b">
                        <div class="flex sm:justify-center">
                            {{$user->name}}
                        </div>
                    </td>
                    <td class="text-center border-b">{{$user->email}}</td>
                    <td class="text-center border-b">{{$user->gender}}</td>
                    <td class="border-b w-5">
                        
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
<!-- END: Content -->

<div class="modal" id="header-footer-modal-preview">
    <div class="modal__content">
        <div
            class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200"
        >
            <h2 class="font-medium text-base mr-auto">Add New User</h2>
            
            
        </div>
        <form method="POST" action="{{ route("users.store") }}" enctype="multipart/form-data">
            @csrf
        <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
            
            <div class="col-span-12 sm:col-span-6">
                <label>Name</label>
                <input
                    type="text"
                    name="name"
                    required
                    class="input w-full border mt-2 flex-1"
                    placeholder="David Musa"
                />
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label>Email</label>
                <input
                    type="text"
                    name="email"
                    required
                    class="input w-full border mt-2 flex-1"
                    placeholder="example@gmail.com"
                />
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    required
                    class="input w-full border mt-2 flex-1"
                    placeholder="password"
                />
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label>Gender</label>
                <select name="gender" class="input w-full border mt-2 flex-1" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        
        </div>
        <div class="px-5 py-3 text-right border-t border-gray-200">
            <button type="cancel" class="button w-20 border text-gray-700 mr-1">
                Cancel
            </button>
            <button type="submit" class="button w-20 bg-theme-1 text-white">
                Send
            </button>
        </div>
    </form>
    </div>
</div>
@endsection
