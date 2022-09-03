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
                    {{-- @foreach ($user->notifications as $noti)
                    {{$noti->data['heading']}}
                    @php
                            $noo = $noti->data['heading'];
                        @endphp
                    @endforeach --}}
                    <div class="float-start">

                        @if (!is_null($noo))
                            @foreach ($user->unreadNotifications as $noti)
                                <h4 class="pb-3">{{ $noti->data['heading'] }}</h4>
                            @endforeach
                        @else
                            <h4 class="pb-3">Title not found!</h4>
                        @endif
                    </div>
                    @foreach ($user->Notifications as $notification)
                        <div class="card">
                            <div class="card-body">
                                <div class="container">
                                    <ul>
                                        <li>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">{{ $notification->data['heading'] }}
                                                </h6>
                                                <h4 class="notification-text">Send by :
                                                    <b>{{ $notification->data['name'] }} and his team</b>
                                                </h4>
                                                @if (!is_null($notification->data['team']))
                                                    <h4 class="notification-text">Team Member : <b>
                                                            @foreach ($notification->data['team'] as $info)
                                                                {{ App\Models\Student_model::getUserNameByID($info) }}
                                                            @endforeach
                                                @endif
                                                </b> </h4>
                                                <span class="notification-text">Email
                                                    :{{ $notification->data['email'] }}</span>
                                            </div>

                                            @if (is_numeric($notification->data['proname']))
                                            <h2> {{ App\Models\Projact::getUserNameByID($notification->data['proname'])}}</h2>
                                              @else
                                            <h2>{{$notification->data['proname']}}</h2>

                                            @endif

                                            {{-- {{ $notification->data['id'] }} --}}
                                            <div>
                                                {!! $notification->data['description'] !!}
                                            </div>
                                        </li>
                                        <div style="float: right;">
                                            <a href="{{url('accepted')}}/{{$id}}" class="btn btn-info m-2">Accapted</a>
                                        </div>
                                        <div style="float: right;">
                                            <a href="{{ url('try_again') }}" class="btn btn-success m-2">Try again</a>
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
