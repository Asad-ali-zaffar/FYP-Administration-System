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
                <div class="col-12">
                    @if (is_null($id))
                        <h4 class="pb-3">Notification not found!!!</h4>
                    @endif
                    @php
                        $user=session()->get('user');
                        $noo = "";
                    @endphp
                    @foreach ($user->notifications as $noti)
                    {{-- {{$noti->data['heading']}}     --}}
                    @php
                            $noo = $noti->data['heading'];
                        @endphp
                    @endforeach
                    <div class="float-start">

                        @if (!is_null($noo))
                            {{-- @foreach ($user->Notifications as $noti) --}}
                                <h4 class="pb-3">{{ $user->Notifications[0]->data['heading'] }}</h4>
                                {{-- <h4 class="pb-3">{{ $noti->data['heading'] }}</h4> --}}
                            {{-- @endforeach --}}
                        @else
                            <h4 class="pb-3">Title not found!</h4>
                        @endif
                    </div>
                    {{-- @foreach ($user->Notifications as $notification) --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="container">
                                    <ul>
                                        <li>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">{{$user->Notifications[0]->data['heading'] }}
                                                </h6>
                                                <h4 class="notification-text">Send by :
                                                    <b>{{ $user->Notifications[0]->data['name'] }}</b>
                                                </h4>                                                
                                                </b> </h4>
                                                <span class="notification-text">Email
                                                    :{{ $user->Notifications[0]->data['email'] }}</span>
                                            </div>
                                           @php
                                           
                                         $teacher=App\Models\Teacher::getTeacherNameById($user->Notifications[0]->data['id']);
                                         $dpt= App\Models\department::getTeacherNameById($teacher[0]->dept_id);                                        
                                               @endphp
                                                @if(!is_null($teacher))
                                                <b>Department</b>:  <h4>{{$dpt[0]->dep_name}}</h4> 
                                                
                                                
                                                @endif
                                                                                        
                                            <h2> </h2>
                                             
                                            
                                           
                                            <div>
                                               
                                            </div>
                                        </li>
                                        
                                        <div style="float: right;">
                                            <a href="{{url('login_access_allow')}}/{{$id}}" class="btn btn-info m-2">Allow access</a>
                                        </div>                                        
                                        <div style="float: right;">
                                            <a href="{{ url('Cancel_access_byAdmin') }}/{{ $id }}"
                                                class="btn btn-danger m-2">Cancel</a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
                    Content body end
                ***********************************-->
@endsection
