<!DOCTYPE html>
<html lang="en">

<head>
    <title>FYP Adminstration System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('res/indexpage/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('res/indexpage/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('res/indexpage/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/indexpage/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="res/indexpage/images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="{{ url('/teacher') }}" method="post" enctype="multipart/form-data">

                    @csrf
                    <span class="login100-form-title">
                        Supervisor Registeration
                    </span>
                    {{-- <form class="form-valide" action="{{ url('/teacher') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="teacher_name">Name <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                //<input type="text" class="form-control" id="teacher_name" name="Superviser_name" value="{{ old('Superviser_name') }}" placeholder="Enter Superviser Name">
                                <span class="text-danger">
                                    @error('Superviser_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="teacher_email">Email <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                               // <input type="text" class="form-control" id="teacher_email" name="email" value="{{ old('email') }}" placeholder=" Enter your email">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="Student_Image ">Image<span
                                    class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                //<input type="file" class="form-control" id="Student_Image"
                                name="Superviser_Image" accept="image/x-png,image/gif,image/jpeg">
                                <span class="text-danger">
                                    @error('Superviser_Image')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="teacher_dept">Superviser Department <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                               // <select class="form-control" id="std_session" name="teacher_dept" >
                                    <option >Select Department... </option>
                                    @foreach ($dpt as $val)
                                    @if ($val->dept_status == 1)
                                    <option value="{{$val->dept_id}}">{{$val->dep_name}}</option>
                                    @endif

                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('teacher_dept')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="teacher_password">Password<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" id="teacher_password" name="password" value="{{ old('password') }}" placeholder=" Enter your password">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form> --}}
                    <div class="wrap-input100 validate-input" data-validate="Valid Name is required: Number not allowed">
                        {{-- <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span> --}}
                        <input type="text" class="input100" id="teacher_name" name="Superviser_name" value="{{ old('Superviser_name') }}" placeholder="Enter Superviser Name">
                                <span class="text-danger">
                                    @error('Superviser_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        {{-- <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span> --}}
                        <input type="text" class="input100" id="teacher_email" name="email" value="{{ old('email') }}" placeholder=" Enter your email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Image is required: image/x-png,image/gif,image/jpeg">
                        <input type="file" class="input100" id="file" onchange="loadFile(event)"
                                name="Superviser_Image" accept="image/x-png,image/gif,image/jpeg">
                                <span class="text-danger">
                                    @error('Superviser_Image')
                                        {{ $message }}
                                    @enderror
                                </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                        </span>
                    </div>
                    {{-- <div class="wrap-input100 validate-input" data-validate="Image is required: image/x-png,image/gif,image/jpeg ">
                        <input type="file" class="input100" id="file" name="Student_Image" accept="image/x-png,image/gif,image/jpeg" onchange="loadFile(event)" >

                                           <span class="text-danger">
                                               @error('Student_Image')
                                                   {{ $message }}
                                               @enderror
                                           </span>
                       <span class="focus-input100"></span>
                       <span class="symbol-input100">
                           <i class="fa fa-picture-o" aria-hidden="true"></i>
                       </span>

                   </div> --}}
                   <p><img id="output" width="200" /></p>
                    <div class="wrap-input100 validate-input" data-validate="Select Option is required: Select your">
                        {{-- <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span> --}}
                        <select class="input100" id="std_session" name="teacher_dept" >
                            <option >Select Department... </option>
                            @foreach ($dpt as $val)
                            @if ($val->dept_status == 1)
                            <option value="{{$val->dept_id}}">{{$val->dep_name}}</option>
                            @endif

                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('teacher_dept')
                                {{ $message }}
                            @enderror
                        </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-building" aria-hidden="true"></i>
                        </span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        {{-- <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span> --}}
                        <input type="password" class="input100" id="teacher_password" name="password" value="{{ old('password') }}" placeholder=" Enter your password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        {{-- <button class="login100-form-btn">
                            Submit
                        </button> --}}
                        <button type="submit" class="login100-form-btn">Submit</button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Goto
                        </span>
                        <a class="txt2" href="/">
                            Login
                        </a>
                    </div>


                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="{{ asset('res/indexpage/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('res/indexpage/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('res/indexpage/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('res/indexpage/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('res/indexpage/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('res/indexpage/js/main.js') }}"></script>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        </script>

</body>

</html>
