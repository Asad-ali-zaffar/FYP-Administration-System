@extends('main')
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
                $s = session()->get('profile_data');
            @endphp

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h1 class="text-white">welcome : {{ $s[0]->teacher_name }}</h1>
                            <div class="d-inline-block">
                                <h4 class="text-white">Email</h4>
                                <p class="text-white mb-0">{{ $s[0]->teacher_email }}</p>
                            </div>
                            {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="text-white">Department
                            </h3>
                            <div class="d-inline-block">
                                @php
                                    $date = App\Models\department::getdepartmentById($s[0]->dept_id);
                                @endphp
                                <h2 class="text-white">{{ App\Models\department::getUserNameByID($s[0]->dept_id) }}
                                </h2>
                                <p class="text-white mb-0">Start Time:
                                    {{ \Carbon\Carbon::parse($date[0]->created_at)->diffForHumans() }}</p>
                            </div>
                            {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="card gradient-3">
                        <div class="card-body">
                            <h3 class="card-title text-white">Supervise Students</h3>
                            <div class="d-inline-block">

                                {{-- {{$s[0]->id}} --}}
                                <h2 class="text-white">
                                    {{ count(App\Models\AllocateTeacher::getStudentNameById($s[0]->id)) }}
                                </h2>

                                    @php
                                        $m = App\Models\AllocateTeacher::getStudentNameById($s[0]->id);
                                    @endphp
                                        @if (!is_null($m))
                                        <p class="text-white mb-0">Start Time: {{ \Carbon\Carbon::parse($m[0]->created_at)->diffForHumans() }}</p>
                                        @endif

                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="card gradient-4">
                        <div class="card-body">
                            <h3 class="card-title text-white">Supervise Project </h3>
                            <div class="d-inline-block">
                                @php

                                    // App\Models\Projact::getProjactById();
                                @endphp
                                <h2 class="text-white">{{ count(App\Models\Projact::getprojactNameById($s[0]->id)) }}
                                </h2>
                                <p class="text-white mb-0">Start Time:
                                    {{ \Carbon\Carbon::parse($s[0]->created_at)->diffForHumans() }}</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
