@extends('../layout/admindashboard') @section('title', 'Precious Stones - ')
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
            <a href="{{ route('stones.index') }}" class="side-menu side-menu--active">
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
            Precious Stones List
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="button text-white bg-theme-1 shadow-md mr-2">Add New Item</button>
            
        </div>
    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
                <tr>
                    <th class="border-b-2 whitespace-no-wrap"> STORAGE ITEM</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">DESPOITOR NAME</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">WEIGHT</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">AMOUNT/QUANITY</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">STATUS</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stones as $key => $stone)
                <tr>
                    <td class="border-b">
                        <div class="font-medium whitespace-no-wrap">{{$stone->storageitem}}</div>
                    </td>
                    <td class="text-center border-b">
                        <div class="flex sm:justify-center">
                            {{$stone->depositor}}
                        </div>
                    </td>
                    <td class="text-center border-b">{{$stone->weight}}</td>
                    <td class="text-center border-b">{{$stone->quantity}}</td>
                    <td class="text-center border-b">
                    <div class="flex items-center justify-center {{$stone->status == 'Active' ? 'text-theme-9' : 'text-theme-6' }}">
                        <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{$stone->status }}
                    </div>
                    </td>
                    <td class="border-b w-5">
                        
                            <div
                                class="flex justify-center items-center"
                            >
                                <a
                                    class="flex items-center mr-3"
                                    href="{{ route('stones.show', $stone->id) }}"
                                >
                                    <i
                                        data-feather="eye"
                                        class="w-4 h-4 mr-1"
                                    ></i>
                                    View
                                </a>
                                <a
                                    class="flex items-center mr-3"
                                    href="{{ route('stones.edit', $stone->id) }}"
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
                                                action="{{ route('stones.destroy', $stone->id) }}"
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
@endsection
