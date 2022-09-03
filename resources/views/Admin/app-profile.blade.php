@extends('Admin.admin_main')
@section('admin_main_section')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                @php

                    $s = session()->get('profile_data');
                    
                @endphp
                @foreach ($s as $vla)
                    <div class="col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">

                                    <img class="mr-3" src="{{ url('Student/' . $vla->image) }}" width="80"
                                        height="80" alt="">

                                    <div class="media-body">
                                        <h3 class="mb-0">{{$vla->admin_name}}</h3>
                                        {{-- <p class="text-muted mb-0">Canada</p> --}}
                                    </div>
                                </div>

                                <h4>About Me</h4>
                                <p class="text-muted">{{$vla->admin_description}}</p>
                                <ul class="card-profile__info">
                                    <li><strong class="text-dark mr-4">Email</strong> <span>{{$vla->admin_email}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

        </div>
    </div>
    <!-- #/ container -->
    </div>
    <!--**********************************
                Content body end
            ***********************************-->
@endsection
