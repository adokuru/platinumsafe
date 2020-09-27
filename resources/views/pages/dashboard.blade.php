@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Platinum Safe Private Fault</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
                    <a href="" class="ml-auto flex text-theme-1">
                        <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                    </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="hexagon" class="report-box__icon text-theme-10"></i>
                                    <div class="ml-auto">
                                        
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">4.510</div>
                                <div class="text-base text-gray-600 mt-1">Precious Metal Storage</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="box" class="report-box__icon text-theme-11"></i>
                                    <div class="ml-auto">
                                        
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">3.521</div>
                                <div class="text-base text-gray-600 mt-1">Safety Deposit Box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="book-open" class="report-box__icon text-theme-12"></i>
                                    <div class="ml-auto">
                                        
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">2.145</div>
                                <div class="text-base text-gray-600 mt-1">Fine Arts Storage</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- END: General Report -->
            <!-- BEGIN: Weekly Top Seller -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Latest Stored Items</h2>
                    
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-no-wrap">Storage Item</th>
                                <th class="whitespace-no-wrap">Depositor Name</th>
                                <th class="text-center whitespace-no-wrap">Weight</th>
                                <th class="text-center whitespace-no-wrap">STATUS</th>
                                <th class="text-center whitespace-no-wrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex">
                                            <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $faker['products'][0]['category'] }}</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-no-wrap">{{ $faker['users'][0]['name'] }}</a>
                                        
                                    </td>
                                    <td class="text-center">{{ $faker['stocks'][0] }} kgs</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-theme-9' : 'text-theme-6' }}">
                                            <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                        </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="">
                                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> View
                                            </a>
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
    </div>
@endsection