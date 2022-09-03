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

                <form class="login100-form validate-form" action="{{ $url }}" method="post" enctype="multipart/form-data">

                    @csrf
                    <span class="login100-form-title">
                        Student Registeration
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        {{-- <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span> --}}
                        <input type="text" class="input100" id="Student_Name" name="Student_Name"
                            value="{{ old('Student_Name') }}" placeholder="Name">
                        <span class="text-danger">
                            @error('Student_Name')
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
                        <input type="email" class="input100" id="std_email" name="Student_Email"
                            value="{{ old('Student_Email') }}" placeholder="Email ">
                        <span class="text-danger">
                            @error('Student_Email')
                                {{ $message }}
                            @enderror
                        </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        {{-- <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span> --}}
                        <input type="number" class="input100" id="std_phone_no" name="Student_Number"
                            value="{{ old('Student_Number') }}" placeholder="Phone Number ">
                        <span class="text-danger">
                            @error('Student_Number')
                                {{ $message }}
                            @enderror
                        </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        {{-- <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span> --}}
                        <input type="text" class="input100" id="Student_Deprt" name="Student_Address"
                            value="{{ old('Student_Address') }}" placeholder="Address">
                        <span class="text-danger">
                            @error('Student_Address')
                                {{ $message }}
                            @enderror
                        </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        {{-- <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span> --}}
                        <input type="text" class="input100" id="Student_registration-no"
                            name="Student_Registration_No" value="{{ old('Student_Registration_No') }}"
                            placeholder="Registration No">
                        <span class="text-danger">
                            @error('Student_Registration_No')
                                {{ $message }}
                            @enderror
                        </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-registered" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        {{-- <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span> --}}
                        {{-- <input type="number" class="input100" id="Student_Semester_Number"
                            name="Student_Semester_Number" value="{{ old('Student_Semester_Number') }}"
                            placeholder="Semester Number "> --}}
                            <select class="input100" id="sel1" name="Student_Semester_Number">
                               <option >Select your Semester ...</option>
                               <option value="1">1st Semester</option>
                               <option value="2">2nd Semester</option>
                               <option value="3">3rd Semester</option>
                               <option value="4">4th Semester</option>
                               <option value="5">5th Semester</option>
                               <option value="6">6th Semester</option>
                               <option value="7">7th Semester</option>
                               <option value="8">8th Semester</option>
                            </select>
                        <span class="text-danger">
                            @error('Student_Semester_Number')
                                {{ $message }}
                            @enderror
                        </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Image is required: image/x-png,image/gif,image/jpeg ">
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

                    </div>
                    <p><img id="output" width="200" /></p>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        {{-- <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span> --}}

                    <select class="input100" id="sel1" name="Student_Deprtment">
                        <option>Deprtment</option>
                        @foreach ($dept as $val)
                            @if ($val->dept_status == 1)
                                <option value="{{ $val->dept_id }}">{{ $val->dep_name }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    <span class="text-danger">
                        @error('Student_Deprtment')
                            {{ $message }}
                        @enderror
                    </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-building" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        {{-- <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span> --}}

                        <select class="input100" id="Student_Program" name="Student_Program">
                            <option>Program</option>
                            @foreach ($program as $val)
                                @if ($val->prog_status == 1)
                                    <option value="{{ $val->prog_id }}">{{ $val->prog_name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('Student_Program')
                                {{ $message }}
                            @enderror
                        </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lastfm" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        {{-- <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span> --}}


                    <select class="input100" id="Student_Session" name="Student_Session">
                        <option>Session</option>
                        @foreach ($session as $val)
                            @if ($val->ses_status == 1)
                                <option value="{{ $val->ses_id }}">{{ date('Y',strtotime($val->start_date))  }} to {{date('Y',strtotime($val->end_date))}}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    <span class="text-danger">
                        @error('Student_Session')
                            {{ $message }}
                        @enderror
                    </span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-hourglass-end" aria-hidden="true"></i>
                        </span>
                    </div>


                    {{-- <form class="form-valide" action="{{ $url }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="Student_Name">Student Name <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                           // <input type="text" class="form-control" id="Student_Name" name="Student_Name"
                                                value="{{ old('Student_Name') }}" placeholder="Student Name">
                                            <span class="text-danger">
                                                @error('Student_Name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="std_email">Student Email <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                           // <input type="email" class="form-control" id="std_email" name="Student_Email"
                                                value="{{ old('Student_Email') }}" placeholder="Student Email ">
                                            <span class="text-danger">
                                                @error('Student_Email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="Student_Password ">Student Password<span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                           // <input type="password" class="form-control" id="Student_Password"
                                                name="Student_Password" value="{{ old('Student_Password') }}"
                                                placeholder="Studen Password ">
                                            <span class="text-danger">
                                                @error('Student_Password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="std_phone_no">Phone Number <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                           // <input type="number" class="form-control" id="std_phone_no"
                                                name="Student_Number" value="{{ old('Student_Number') }}"
                                                placeholder="Phone Number ">
                                            <span class="text-danger">
                                                @error('Student_Number')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="Student_Deprt">Student Address <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                           // <input type="text" class="form-control" id="Student_Deprt"
                                                name="Student_Address" value="{{ old('Student_Address') }}"
                                                placeholder="Student Address">
                                            <span class="text-danger">
                                                @error('Student_Address')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="Student_registration-no">Student
                                            Registration No <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                           // <input type="text" class="form-control" id="Student_registration-no"
                                                name="Student_Registration_No"
                                                value="{{ old('Student_Registration_No') }}"
                                                placeholder="Student Registration No">
                                            <span class="text-danger">
                                                @error('Student_Registration_No')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="Student_Semester_Number ">Student
                                            Semester Number <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                           // <input type="number" class="form-control" id="Student_Semester_Number"
                                                name="Student_Semester_Number"
                                                value="{{ old('Student_Semester_Number') }}"
                                                placeholder="Student Semester Number ">
                                            <span class="text-danger">
                                                @error('Student_Semester_Number')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="Student_Image ">Student Image<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                           // <input type="file" class="form-control" id="Student_Image"
                                            name="Student_Image" accept="image/x-png,image/gif,image/jpeg" value="{{ old('Student_Image') }}">

                                            <span class="text-danger">
                                                @error('Student_Image')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="sel1">Student Deprtment<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                           // <select class="form-control" id="sel1" name="Student_Deprtment">
                                                <option>Student Deprtment</option>
                                                @foreach ($dept as $val)
                                                    @if ($val->dept_status == 1)
                                                        <option value="{{ $val->dept_id }}">{{ $val->dep_name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <span class="text-danger">
                                                @error('Student_Deprtment')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="Student_Program">Student Program<span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                           // <select class="form-control" id="Student_Program" name="Student_Program">
                                                <option>Student Program</option>
                                                @foreach ($program as $val)
                                                    @if ($val->prog_status == 1)
                                                        <option value="{{ $val->prog_id }}">{{ $val->prog_name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <span class="text-danger">
                                                @error('Student_Program')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="Student_Session">Student Session<span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                          //  <select class="form-control" id="Student_Session" name="Student_Session">
                                                <option>Student Session</option>
                                                @foreach ($session as $val)
                                                    @if ($val->ses_status == 1)
                                                        <option value="{{ $val->ses_id }}">{{ $val->ses_Name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <span class="text-danger">
                                                @error('Student_Session')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </form> --}}

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        {{-- <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span> --}}
                        <input type="password" class="input100" id="Student_Password" name="Student_Password"
                            value="{{ old('Student_Password') }}" placeholder="Password ">
                        <span class="text-danger">
                            @error('Student_Password')
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
