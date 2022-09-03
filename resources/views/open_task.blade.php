@extends('main')
@section('main_section')
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
                    {{-- "heading":"online car rental","message":"New Fyp Proposal!!!","senderid":["1","2","11"],"setTaskId":97,"url":"http:\/\/127.0.0.1:8000\/fyp_proposal --}}
                    @php
                            $noo = $noti->data['heading'];
                        @endphp
                    @endforeach
                    <div class="float-start">

                        @if (!is_null($noo))
                            @foreach ($user->unreadNotifications as $noti)
                                <h4 class="pb-3">{{ $noti->data['heading'] }}</h4>
                                @break
                            @endforeach
                        @else
                            <h4 class="pb-3">Title not found!</h4>
                        @endif
                    </div>
                    @foreach ($user->unreadNotifications as $notification)
                        <div class="card">
                            <div class="card-body">
                                <div class="container">
                                    <ul>
                                        <li>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">{{ $notification->data['heading'] }}
                                                </h6>
                                                <h4 class="notification-text"></h4>
                                                @if (!is_null($notification->data['senderid']))
                                                    <h4 class="notification-text">Send by<b><br>
                                                            @foreach ($notification->data['senderid'] as $info)
                                                            @php
                                                                    $data=App\Models\Student_model::getStudentNameById($info);

                                                            @endphp
                                                                {{$data[0]->std_name}}
                                                                {{$data[0]->std_reg_no}} <br>
                                                            @endforeach
                                                @endif
                                                </b> </h4>
                                            </div>

                                            {{-- @if (is_numeric($notification->data['heading'])) --}}
                                            {{-- <h2> {{ App\Models\Projact::getUserNameByID($notification->data['heading'])}}</h2> --}}
                                              {{-- @else --}}
                                            {{-- <h2>{{$notification->data['heading']}}</h2> --}}

                                            {{-- @endif --}}

                                            {{-- {{ $notification->data['setTaskId'] }} --}}
                                            <div>
                                                @php
                                                    $setTask=App\Models\FypParposal::getTaskDataById($notification->data['setTaskId']);
                                                // dd( $setTask);
                                               @endphp
                                                {!! $setTask[0]->description !!}
                                            </div>
                                        </li>
                                        <div style="float: right;">
                                            <a href="{{url('accepted_fyp_proposal')}}/{{$id}}" class="btn btn-info m-2">Accapted</a>
                                        </div>
                                        <div style="float: right;">
                                            <a href="{{ url('try_again') }}" class="btn btn-success m-2">Revion</a>
                                        </div>
                                        <div style="float: right;">
                                            <a href="{{ url('Cancel_request') }}/{{ $id }}"
                                                class="btn btn-danger m-2">Cancel</a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
                    Content body end
                ***********************************-->
@endsection
