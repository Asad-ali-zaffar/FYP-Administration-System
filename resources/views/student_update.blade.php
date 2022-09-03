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
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="{{ $url }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @foreach ($std as $value)
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Student_Name">Student Name <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="Student_Name" name="std_name"
                                                    value="{{ $value->std_name }}" placeholder="Student Name">
                                                <span class="text-danger">
                                                    @error('std_name')
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
                                                <input type="email" class="form-control" id="std_email" name="std-email"
                                                    value="{{ $value->email }}" placeholder="Student Email ">
                                                <span class="text-danger">
                                                    @error('std-email')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="std_Password ">Student Password<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="std_Password"
                                                    name="std_Password" value="" placeholder="Studen Password ">
                                                <span class="text-danger">
                                                    @error('std_Password')
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
                                                <input type="number" class="form-control" id="std_phone_no"
                                                    name="std_phone_no" value="{{ $value->std_phone_num }}"
                                                    placeholder="Phone Number ">
                                                <span class="text-danger">
                                                    @error('std_Password')
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
                                                <input type="text" class="form-control" id="Student_Deprt"
                                                    name="std_adress" value="{{ $value->std_address }}"
                                                    placeholder="Student Address">
                                                <span class="text-danger">
                                                    @error('std_adress')
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
                                                <input type="text" class="form-control" id="Student_registration-no"
                                                    name="std_reg_no" value="{{ $value->std_reg_no }}"
                                                    placeholder="Student Registration No">
                                                <span class="text-danger">
                                                    @error('std_reg_no')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="std_semes_no ">Student Semester
                                                Number <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="std_semes_no"
                                                    name="std_semes_no" value="{{ $value->std_semster_no }}"
                                                    placeholder="Student Semester Number ">
                                                <span class="text-danger">
                                                    @error('std_semes_no')
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
                                                <input type="file" class="form-control" id="Student_Image"
                                                    name="Student_Image" accept="image/x-png,image/gif,image/jpeg" value="{{ $value->image }}">
                                                    {{-- <input type="hidden" name="curent_image" > --}}
                                                    @if (!empty($value->image))
                                                        <img src="{{url('Student/'.$value->image)}}" alt="" style="width: 100px;margin-top:10px;" >
                                                    @endif
                                                <span class="text-danger">
                                                    @error('Student_Image')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sel1" class="col-lg-4 col-form-label">Student Deprtment<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="sel1" name="std_department">
                                                    @foreach ($value->getDepartment as $val)
                                                        <option value="{{ $val->dept_id }}">
                                                            {{ $val->dep_name }}
                                                        </option>
                                                    @endforeach
                                                    @foreach ($dept as $val)
                                                        @if ($val->dept_status == 1)
                                                            <option value="{{ $val->dept_id }}">{{ $val->dep_name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">
                                                    @error('std_department')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="Student_Program" class="col-lg-4 col-form-label">Student
                                                Program<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="Student_Program" name="std_program_name">
                                                    @foreach ($value->getprogram as $val)
                                                        <option value="{{ $val->prog_id }}">
                                                            {{ $val->prog_name }}
                                                        </option>
                                                    @endforeach
                                                    @foreach ($program as $val)
                                                        @if ($val->prog_status == 1)
                                                            <option value="{{ $val->prog_id }}">{{ $val->prog_name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">
                                                    @error('std_program_name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="std_session" class="col-lg-4 col-form-label">Student Session<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="std_session" name="std_session">
                                                    @foreach ($value->getSession as $val)
                                                        <option value="{{ $val->ses_id }}">
                                                            {{ $val->ses_Name }}
                                                        </option>
                                                    @endforeach
                                                    @foreach ($session as $val)
                                                        @if ($val->ses_status == 1)
                                                            <option value="{{ $val->ses_id }}">{{ $val->ses_Name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">
                                                    @error('std_session')
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
                            @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    </div>
    <!--**********************************
                                    Content body end
                                ***********************************-->
    {{-- <!--**********************************
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
                    <div class="col-md-12">
                        <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                            <div>
                                <h4>Account Details</h4>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="password" name="Password" class="form-control" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h4>Your Address</h4>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="firstName" class="form-control" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="lastName" class="form-control" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="address" class="form-control" placeholder="Address" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="city" class="form-control" placeholder="City" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="zip" class="form-control" placeholder="ZIP Code" required>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h4>Billing Details</h4>
                                <section>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="creditCard" placeholder="Credit Card Number">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="date" placeholder="Expiration Date">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="owner" placeholder="Credit Card Owner">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h4>Confirmation</h4>
                                <section>
                                    <div class="row h-100">
                                        <div class="col-12 h-100 d-flex flex-column justify-content-center align-items-center">
                                            <h2>You have submitted form successfully!</h2>
                                            <p>Thank you very much for you information. we will procceed accordingly.</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************--> --}}
@endsection
