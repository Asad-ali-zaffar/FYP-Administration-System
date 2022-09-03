@extends('Admin.admin_main')
@section('admin_main_section')
    {{-- Content body start
       *********************************** --}}
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
                                <form class="form-valide" action="{{ $url }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @foreach ($admin as $value)
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Admin_Name ">Name <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="Admin_Name" name="Admin_Name"
                                                    value="{{ $value->admin_name }}" placeholder="Enter your Name">
                                                <span class="text-danger">
                                                    @error('Admin_Name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="admin_email ">Email <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="admin_email" name="email"
                                                    value="{{$value->admin_email}}"  placeholder="Enter your email">
                                                <span class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Admin_Detail ">Enter Admin Detail
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="Admin_Detail "
                                                    name="Admin_Detail" value="{{ $value->admin_description }}"
                                                    placeholder="Enter your Detail">
                                                <span class="text-danger">
                                                    @error('Admin_Detail')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Student_Image ">Admin Image<span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="Student_Image"
                                                name="admin_Image" accept="image/x-png,image/gif,image/jpeg" value="{{$value->image}}" >
                                                @if (!empty($value->image))
                                                <img src="{{url('Student/'.$value->image)}}" alt="" style="width: 100px;margin-top:10px;" >
                                            @endif
                                                <span class="text-danger">
                                                    @error('admin_Image')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Admin_Password">Password <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="Admin_Password "
                                                    name="Admin_Password" placeholder="Admin_Password ">
                                                <span class="text-danger">
                                                    @error('Admin_Password')
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
    {{-- <!--**********************************
           Content body end --}}
@endsection
