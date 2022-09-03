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
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="{{ url('/session') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="Session_Name">Session Name <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="Session_Name" name="Session_Name"
                                                placeholder="Session Name" value="{{ old('Session_Name') }}">
                                            <span class="text-danger">
                                                @error('Session_Name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="start_date">Session Start Date <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="date" class="form-control" id="start_date" name="start_date"
                                                value="{{ old('start_date') }}" placeholder="">
                                            <span class="text-danger">
                                                @error('start_date')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="end_date">Session End Date <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="date" class="form-control" id="end_date" name="end_date"
                                                value="{{ old('end_date') }}" placeholder="">
                                            <span class="text-danger">
                                                @error('end_date')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            @if (Session::get('fail'))
                                                <div class="alert alert-danger">
                                                    {{ Session::get('fail') }}</div>
                                            @endif
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
    <!--**********************************
                    Content body end
                ***********************************-->
@endsection
