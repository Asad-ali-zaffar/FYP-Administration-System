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
                                    <form class="form-valide" action="{{$url}}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="project_Name ">Project Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="project_Name" name="project_Name" placeholder="Poject Name">
                                                <span class="text-danger">
                                                    @error('project_Name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Student_Program">Students <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                            <select class="form-control" id="Student_Program" name="std_id" >
                                                <option >Select Student</option>
                                                @foreach ($student as $val)
                                                <option value="{{$val->id}}">{{$val->std_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">
                                                @error('std_id')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Student_Program">Supervisor<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                            <select class="form-control" id="Student_Program" name="Supervisor" >
                                                <option >Select Superviser</option>
                                                @foreach ($Teacher as $val)
                                                <option value="{{$val->id}}">{{$val->teacher_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">
                                                @error('Supervisor')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Admin_Password ">Super Admin_Password  <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="Admin_Password " name="Admin_Password " placeholder="Admin_Password ">
                                            </div>
                                        </div> --}}

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
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
