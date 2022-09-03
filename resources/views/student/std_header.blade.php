
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
{{--   --}}
<!-- multipal select -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</head>

<body>


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @php
    //   $s=session()->all();
      $s=session()->get('profile_data');
            // echo "<pre>";
            //     print_r($s);
                // die;
@endphp

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="/student_login">
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
                        $m=session()->get('m');
                        // $m=count($user->unreadNotifications);
                        $id="";
                        foreach ($user->readNotifications as $notification)
                        {
                        $id=$notification->data['id'];
                         }
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
                                            {{-- <a href="/teacher/status/{{$notification->data['id']}}/1"> --}}
                                            <a href="{{url('marked/'.$notification->id)}}">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">{{$notification->data['heading']}}</h6>
                                                    <span class="notification-text">{{$notification->data['name']}}</span>
                                                </div>
                                            </a>
                                        </li>
                                       @endforeach
                                    </ul>

                                </div>
                            </div>
                        </li>
                        {{-- <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li> --}}
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                @foreach ($s as $vla)
                                <img src="{{url('Student/'.$vla->image)}}" height="40" width="40" alt="">
                                @endforeach
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="student-profile"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        {{-- <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>

                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li> --}}
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
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/chatpage_std">Chat List</a></li>
                            <!-- <li><a href="./index-2">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-calendar menu-icon"></i><span class="nav-text">Fyp Proposal</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/send_requst">Send Proposal</a></li>
                            {{-- <li><a href="/session/view">Manage Session </a></li> --}}
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-calendar menu-icon"></i><span class="nav-text">Assigning Task  </span>
                        </a>
                        <ul aria-expanded="false">
                            {{-- <li><a href="{{url('task/show')}}/{{$id}}">Tasks Assigned</a></li> --}}
                            <li><a href="{{url('all_notification')}}/{{$id}}">Tasks Assigned</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-user"></i><span class="nav-text">Available Supervisor</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/Allocate/view/std">Available Supervisor</a></li>
                        </ul>
                    </li>
                    {{-- <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-building-o"></i><span class="nav-text">Department</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/department">Add new Department</a></li>
                            <li><a href="/add/view">Manage Department</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-graduation-cap"></i><span class="nav-text">Program</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/program">Add new Program</a></li>
                            <li><a href="/program_view">Manage Program</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-user-graduate"></i><span class="nav-text">Students</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/student-register">Add new Student</a></li>
                            <li><a href="/student-register-view">Manage Student </a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-tasks"></i><span class="nav-text">Projects</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/project">Add new Project</a></li>
                            <li><a href="/project_view">Manage Projects </a></li>
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
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-thin fa fa-person-chalkboard"></i><span class="nav-text">Superviser</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/teacher">Add new Superviser</a></li>
                            <li><a href="/teacher/view">Manage  Superviser </a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-user"></i><span class="nav-text">Super Admin</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/admin">Add new Super Admin</a></li>
                            <li><a href="/admin/view">Manage  Super Admin </a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-user"></i><span class="nav-text">Allocate Teacher</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/AllocateTeacher">Add new Allocation</a></li>
                            <li><a href="/Allocate/view">Manage  Allocation </a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Apps</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./email-inbox">Inbox</a></li>
                            <li><a href="./email-read">Read</a></li>
                            <li><a href="./email-compose">Compose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile">Profile</a></li>
                            <li><a href="./app-calender">Calender</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot">Flot</a></li>
                            <li><a href="./chart-morris">Morris</a></li>
                            <li><a href="./chart-chartjs">Chartjs</a></li>
                            <li><a href="./chart-chartist">Chartist</a></li>
                            <li><a href="./chart-sparkline">Sparkline</a></li>
                            <li><a href="./chart-peity">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">UI Components</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">UI Components</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion">Accordion</a></li>
                            <li><a href="./ui-alert">Alert</a></li>
                            <li><a href="./ui-badge">Badge</a></li>
                            <li><a href="./ui-button">Button</a></li>
                            <li><a href="./ui-button-group">Button Group</a></li>
                            <li><a href="./ui-cards">Cards</a></li>
                            <li><a href="./ui-carousel">Carousel</a></li>
                            <li><a href="./ui-dropdown">Dropdown</a></li>
                            <li><a href="./ui-list-group">List Group</a></li>
                            <li><a href="./ui-media-object">Media Object</a></li>
                            <li><a href="./ui-modal">Modal</a></li>
                            <li><a href="./ui-pagination">Pagination</a></li>
                            <li><a href="./ui-popover">Popover</a></li>
                            <li><a href="./ui-progressbar">Progressbar</a></li>
                            <li><a href="./ui-tab">Tab</a></li>
                            <li><a href="./ui-typography">Typography</a></li> --}}
                        <!-- </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                        </a>
                        <ul aria-expanded="false"> -->
                            {{-- <li><a href="./uc-nestedable">Nestedable</a></li>
                            <li><a href="./uc-noui-slider">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert">Sweet Alert</a></li>
                            <li><a href="./uc-toastr">Toastr</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li class="nav-label">Forms</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./form-basic">Basic Form</a></li>
                            <li><a href="./form-validation">Form Validation</a></li>
                            <li><a href="./form-step">Step Form</a></li>
                            <li><a href="./form-editor">Editor</a></li>
                            <li><a href="./form-picker">Picker</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./table-basic" aria-expanded="false">Basic Table</a></li>
                            <li><a href="./table-datatable" aria-expanded="false">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login">Login</a></li>
                            <li><a href="./page-register">Register</a></li>
                            <li><a href="./page-lock">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-404">Error 404</a></li>
                                    <li><a href="./page-error-403">Error 403</a></li>
                                    <li><a href="./page-error-400">Error 400</a></li>
                                    <li><a href="./page-error-500">Error 500</a></li>
                                    <li><a href="./page-error-503">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
