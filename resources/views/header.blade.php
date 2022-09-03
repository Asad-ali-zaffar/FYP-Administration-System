
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>FYP Administration System </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('res/images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{asset('res/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('res/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('res/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('res/css/style.css')}}" rel="stylesheet">
   <!-- CSS only -->
{{-- <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    {{-- student register css --}}
    <script src="https://kit.fontawesome.com/c11d7e9d32.js" crossorigin="anonymous"></script>

    <link href="{{ asset('res/plugins/jquery-steps/css/jquery.steps.css')}}" rel="stylesheet">
    {{-- editor --}}
     <link href="{{url('res/plugins/summernote/dist/summernote.css')}}" rel="stylesheet">
    {{-- data table --}}
    <link href="{{ asset('res/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
{{-- <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
</head>

<body>


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{url('/superviser')}}">
                    <b class="logo-abbr"><img src="{{ url('res/images/logo.png')}}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ url('res/images/logo-compact.png')}}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{ url('res/images/logo-text.png')}}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        {{-- <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="res/images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li> --}}
                        @php
                        $user=session()->get('user');
                        $m=count($user->unreadNotifications);
                    @endphp
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">{{$m}}</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">New Notifications</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">{{$m}}</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">

                                    <ul>
                                        @foreach ($user->unreadNotifications as $notification)
                                        <li>
                                            {{-- <a href="markread/{{$notification->id}}"> --}}
                                            <a href="{{url('markread')}}/{{$notification->id}}">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">{{$notification->data['heading']}}</h6>
                                                    <span class="notification-text">{{ $notification->data['name']}}</span>
                                                    <span class="notification-text">{{ $notification->data['email']}}</span>
                                                </div>
                                            </a>
                                        </li>

                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                @php
                                    $s=session()->get('profile_data')
                                @endphp
                                @foreach ($s as $vla)
                                <img src="{{ url('Student/' . $vla->image) }}" height="40" width="40" alt="">
                                @endforeach

                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="/superviser-profile"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li><a href="/"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="/index" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/chatpage_teacher">Chat List</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-tasks"></i><span class="nav-text">Projects</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/project">Add new Project</a></li>
                            <li><a href="{{url('/project_view')}}/{{$s[0]->id}}">Manage Projects </a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-project-diagram"></i><span class="nav-text">Project Deials</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/projectdetail">Add new Project Deials</a></li>
                            <li><a href="/projectdetail/view">Manage Project Deials </a></li>
                        </ul>
                    </li>
                    {{-- <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-thin fa fa-person-chalkboard"></i><span class="nav-text">Superviser</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/teacher">Add new Superviser</a></li>
                            <li><a href="/teacher/view">Manage  Superviser </a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-user"></i><span class="nav-text">Allocate Teacher</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/Allocate/view/teacher">Manage  Allocation </a></li>
                        </ul>
                    </li> --}}
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-user"></i><span class="nav-text">Task Schedule</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('task.index')}}">Schedule new task</a></li>
                           @if (count($user->Notifications)>0)
                           {{-- @foreach ($user->Notifications as $notification) --}}
                           {{-- <li><a href="{{url('/Notification')}}/{{$user->Notifications[0]->notifiable_id}}">All Notifications </a></li>

                            @endforeach
                            @else
                            <li><a href="{{url('/Notification')}}">All Notifications </a></li> --}}
                           @endif

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

