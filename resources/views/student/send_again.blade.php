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
                            <h4 class="pb-3">All Task</h4>
                        </div>
                    </div>
                    {{-- <h1>{{$task[0]->getProject[0]->proj_name}}</h1> --}}

                    @foreach ($user->readnotifications as $tasks)

                    <div class="card">
                        <div class="card-header">
                          {{$tasks->data['heading']}}
                            <span class="badge rounded-pill bg-warning text-dark">
                                 {{ \Carbon\Carbon::parse($tasks->updated_at)->diffForHumans() }}
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <div class="float-start">
                                   <b> <u>Sending by</u> </b>: <u><h3>{{ App\Models\Teacher::getUserNameByID($tasks->data['id'])}}</h3></u>
                                   {{$tasks->data['name']}}
                                <br>
                               </div>
                                <div style="float: right;">
                                        <a href="{{url('send_again_byStudent')}}/{{$tasks->id}}" class="btn btn-success">Send again</a>
                                    </div>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                     @endforeach

                </div>
            </div>
        </div>
    </div>


@endsection
