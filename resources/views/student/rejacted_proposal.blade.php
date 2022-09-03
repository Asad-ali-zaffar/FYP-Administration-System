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
                            <h4 class="pb-3">ALL Rejacted Proposals</h4>
                        </div>
                        @php
                        $user=session()->get('user');
                    @endphp
                       {{-- <h1>ALL Rejacted Proposals </h1>                      --}}
                   @foreach ($user->Notifications as $noti )               
                   
                    <div class="card">
                        <div class="card-header">                            
                            Rejacted Proposals
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <div class="float-start">                  
                                  <h1>{{$noti->data['heading']}}</h1> 
                                  <h3> Rejacted by: {{App\Models\Teacher::getUserNameByID($noti->data['id'])}}</h3>
                                <br>
                                
                                <small>{{$noti->data['name']}} </small>
                                </div>
                                <div style="float: right;">
                                        <a href="{{url('delete_notifiction')}}/{{$noti->id}}" class="btn btn-danger">Delete notification</a>
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
    </div>  
    
    @endsection
    