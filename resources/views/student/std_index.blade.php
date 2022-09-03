@extends('student.std_main')
@section('main_section')



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
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h1 class=" text-white">Welcome </h1>
                                <p class="card-title text-white"> {{$s[0]->std_name}} </p>
                                <div class="d-inline-block">
                                    <h2 class=" text-white">Reg.No</h2>
                                    <p class="text-white mb-0">{{$s[0]->email}}</p>
                                    </div>
                                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                {{-- <h2 class="text-white">Registration</h2>
                                    <p class="text-white mb-0"> {{$s[0]->std_reg_no}}</p> --}}

                                <h1 class=" text-white">Department </h1>
                                <p class="card-title text-white">{{ App\Models\department::getUserNameByID($s[0]->dept_id)}}</p>
                                <div class="d-inline-block">
                                    <h2 class="text-white"> Program </h2>
                                    {{-- <h2 class="text-white">  </h2> --}}
                                    <p class="text-white mb-0">{{ App\Models\Program::getUserNameByID($s[0]->prog_id)}} </p>
                                </div>
                                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h1 class="text-white">Session</h1>
                                <h3 class="card-title text-white">{{ App\Models\Session::getUserNameByID($s[0]->std_session_id)}}</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">Semster </h2>
                                    {{-- <h2 class="text-white"> </h2> --}}
                                    <p class="text-white mb-0">{{$s[0]->std_semster_no}}</p>
                                </div>
                                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span> --}}
                            </div>
                        </div>
                    </div>

                    @if (Session::get('fail'))
                    <span class="text-danger">
                        <div class="col-lg-12 col-sm-6">
                            <div class="card gradient-2">
                                <div class="card-body">
                                    <h1 class="text-white">{{ Session::get('fail') }}</h1>
                                   
                                    {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span> --}}
                                </div>
                            </div>
                        </div>
                        
                    </span>
                @endif


                </div>
            </div>
        </div>
@endsection
