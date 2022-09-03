
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
                                        @foreach ($fyp as $value)
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Commate_Heade">Committee Member Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="Commate_Heade" name="Commate_Member_name" value="{{$value->com_member_name}}" placeholder="Committee Member Name">
                                                <span class="text-danger">
                                                    @error('Commate_Member_name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Commate_Heade1"> Committee Member Desigination <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="Commate_Heade1" value="{{$value->com_member_desigination}}" name="Committee_Desigination" placeholder="Committee Member Desigination">
                                                <span class="text-danger">
                                                    @error('Committee_Desigination')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Commate_Desc"> Committee Datail <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="Commate_Desc" name="com_datails" placeholder="Commate Member Datail"> {{$value->com_datails}}</textarea>
                                                <span class="text-danger">
                                                    @error('com_datails')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="dept_Name">Department Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="dept_id" id="dept_Name" class="form-control">
                                                    @foreach ($value->getDpt as $val)
                                                    <option value="{{$val->dept_id}}">{{ $val->dep_name }}</option>
                                                    @endforeach
                                                    @foreach ($dpt as $valu)
                                                        <option value="{{ $valu->dept_id }}">{{ $valu->dep_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">
                                                    @error('dept_id')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="project-Name">Department  Teacher
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="proj_id" id="project-Name" class="form-control">
                                                    @foreach ($value->getTeacher as $val)
                                                    <option value="{{$val->teacher_id}}">{{ $val->teacher_name }}</option>
                                                    @endforeach
                                                    @foreach ($techer as $valu)
                                                        <option value="{{ $valu->teacher_id }}">{{ $valu->teacher_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">
                                                    @error('proj_id')
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
