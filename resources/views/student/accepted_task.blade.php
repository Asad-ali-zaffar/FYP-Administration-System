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
                @php
                $user=session()->get('user');
            @endphp
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="container">
                    <div>
                        <div class="float-start">
                            <h4 class="pb-3">{{$heading}}</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span class="badge rounded-pill bg-warning text-dark">

                        {{ \Carbon\Carbon::parse($createdated_at)->diffForHumans() }}
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <div class="float-start">
                                   
                                    <h4>Accepted by: {{ App\Models\Teacher::getUserNameById($senderid)}} </h4>
                          
                                <br>
                                @php
                                   $project=  App\Models\SetTask::getTaskDataById($user->notifications[0]->data['setTaskId']);
                                @endphp
                                @foreach ($project as $data)
                                <h4>Project Title : {{$heading}}</h4>
                                <p>{!!$data->description!!}</p>
                                    
                                @endforeach
                                <small>Accepted updated - {{$updated_at->diffForHumans()}}</small>
                                </div>
                                <div style="float: right;">
                                        <a href="{{ url('/student_login') }}" class="btn btn-success">Back to home Page</a>
                                    </div>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                     {{-- @endforeach --}}
                    
                </div>
            </div>
        </div>
    </div>


@endsection
