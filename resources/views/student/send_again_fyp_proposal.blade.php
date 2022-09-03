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
            <div class="row">
                <div class="container">
                    <div>
                        <div class="float-start">
                            <h4 class="pb-3">All Task</h4>
                        </div>
                    </div>

                    {{-- <div><h1><label for="">Project Name :</label> {{$task[0]->getProject[0]->proj_name}}</h1></div> --}}

                    @foreach ($task as $tasks)

                    <div class="card">
                        <div class="card-header">
                          @if ($tasks->status === "done")
                          <del>{{$tasks->title}}</del>
                          @else
                          {{$tasks->title}}
                          @endif
                            <span class="badge rounded-pill bg-warning text-dark">
                                {{-- {{$tasks->created_at->diffForHumanes()}} --}}

                        {{ \Carbon\Carbon::parse($tasks->created_at)->diffForHumans() }}
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <div class="float-start">
                                  <div> <b><u><h3>Sending by : {{ App\Models\Teacher::getUserNameByID($senderid)}}</h3></u></b></div>
                                    @if ($tasks->status === "done")
                          <del>{{$tasks->title}}</del>
                          @else{{$tasks->description}}
                          @endif

                                <br>
                                
                                <small>Last updated - {{$tasks->updated_at->diffForHumans()}}</small>
                                </div>
                                <div style="float: right;">
                                        <a href="{{ url('send_requst')}}/{{$setTaskId}}" class="btn btn-success">Send again</a>
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
