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

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="{{$url}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @foreach ($Teacher as $valu)
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="teacher_name">Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="teacher_name" name="Superviser_name" value="{{$valu->teacher_name}}" placeholder="Enter Superviser Name">
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
                                                <input type="text" class="form-control" id="teacher_email" name="email" value="{{ $valu->teacher_email }}" placeholder=" Enter your email">
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
                                                <input type="file" class="form-control" id="Student_Image"
                                                name="Superviser_Image" value="{{$valu->image}}" accept="image/x-png,image/gif,image/jpeg">
                                                @if (!empty($valu->image))
                                                <img src="{{url('Student/'.$valu->image)}}" alt="" style="width: 100px;margin-top:10px;" >
                                            @endif
                                                <span class="text-danger">
                                                    @error('Superviser_Image')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="teacher_dept">Superviser Deptartemnt <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="std_session" name="teacher_dept" >
                                                    @foreach ($valu->getDpt as $value)
                                                    <option value="{{$value->dept_id}}">{{$value->dep_name}}</option>
                                                    @endforeach
                                                    @foreach ($dpt as $val)
                                                    <option value="{{$val->dept_id}}">{{$val->dep_name}}</option>
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
                                            <label class="col-lg-4 col-form-label" for="teacher_password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="teacher_password" name="password" value="{{ old('email') }}" placeholder=" Enter your password">
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
        @endsection
