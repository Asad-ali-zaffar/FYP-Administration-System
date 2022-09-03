
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
                @php
                $user=session()->get('user');
            @endphp
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="container">
                    <div>
                        <div class="float-start">
                            <h4 class="pb-3">{{$user->notifications[0]->data['heading']}}</h4>
                        </div>
                    </div>
@foreach ($user->notifications as $noti )


                    <div class="card">
                        <div class="card-header">
                          {{$noti->data['email']}}
                            <span class="badge rounded-pill bg-warning text-dark">
                        {{ \Carbon\Carbon::parse($noti->created_at)->diffForHumans() }}
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <div class="float-start">
                                    {{-- <h5>{!!$noti->data['description']!!}</h5> --}}
                                    <h4>{{$user->teacher_name}}</h4>
                                    <h5>{{$user->teacher_email}}</h5>
                                    <h5>{!!$noti->data['description']!!}</h5>

                                <br>
                                <span class="badge rounded-pill bg-warning text-dark">
                                   <small>Last updated - {{$noti->updated_at->diffForHumans()}}</small>                         </span>

                                </div>
                                <div style="float: right;">
                                        <a href="{{ url('/superviser') }}" class="btn btn-success">Go Home Page</a>
                                    </div>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                        @php
                            break;
                        @endphp
                     @endforeach

                </div>
            </div>
        </div>
    </div>


@endsection
