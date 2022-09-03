@extends('Admin.admin_main')
@section('admin_main_section')
{{-- <center><h1>Welcome Admin</h1></center> --}}

<!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
     <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                @php
                   $s= session()->get('profile_data');
                @endphp

                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="text-white"> Welcome </h3>
                                <p class="text-white mb-0"><b>{{$s[0]->admin_name}}</b></p>
                                <div class="d-inline-block">
                                    <h2 class="text-white">Email</h2>
                                    <p class="text-white mb-0">{{$s[0]->admin_email}}</p>
                                </div>
                                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h1 class="card-title text-white">Designation</h1>
                                <p class="text-white mb-0"><b>{{ App\Models\Admin::getProvince($s[0]->admin_description)}}</b></p>
                                <div class="d-inline-block">
                                    {{-- <h2 class="text-white">$ 8541</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p> --}}
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="text-white">Programs</h3>
                                <div class="d-inline-block">
                                    @php
                                        $data=App\Models\Program::getProgramById();
                                    @endphp
                                    <h2 class="text-white">{{count(App\Models\Program::getProgramById())}}</h2>
                                    <p class="text-white mb-0">Start Time: {{ \Carbon\Carbon::parse($data[0]->created_at)->diffForHumans() }}</p>
                                </div>
                                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="text-white">Runing Projacts</h3>
                                <div class="d-inline-block">
                                    @php
                                        $projact=App\Models\Projact::getProjactById();
                                    @endphp
                                    <h2 class="text-white">{{ count(App\Models\Projact::getProjactById())}}</h2>
                                    <p class="text-white mb-0">Start Time: {{ \Carbon\Carbon::parse($projact[0]->created_at)->diffForHumans() }}</p>
                                </div>
                                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
