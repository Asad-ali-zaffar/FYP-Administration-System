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
                                <form class="form-valide" action="{{ url('/admin') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="Admin_Name ">Name <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="Admin_Name" name="Admin_Name"
                                                value="{{ old('Admin_Name') }}" placeholder="Enter your Name">
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
                                                value="{{ old('email') }}" placeholder="Enter your email">
                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="Admin_Detail ">Detail <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="Admin_Detail " name="Admin_Detail"
                                                value="{{ old('Admin_Detail') }}" placeholder="Enter Admin Details ">
                                            <span class="text-danger">
                                                @error('Admin_Detail')
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
                                            <input type="file" class="form-control" id="Student_Image" name="admin_Image"
                                                accept="image/x-png,image/gif,image/jpeg"
                                                value="{{ old('admin_Image') }}">
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
                                                name="Admin_Password" placeholder="Enter your Password ">
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
