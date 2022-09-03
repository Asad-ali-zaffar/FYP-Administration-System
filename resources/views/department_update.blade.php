
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
                                    <form class="form-valide" action="{{ $url }}" method="post">
                                        @csrf
                                        @foreach ($department as $valu)

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Session_Name">Department Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="Session_Name" name="ses_Name" placeholder="Session Name" value="{{ $valu->dep_name }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="start_date">Department Status <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                @if( $valu->dept_status == '1')
                                                        <input type="radio" name="optradio"  id="radio" checked value="1"><label for="radio" >Active</label>
                                                        <input type="radio" name="optradio" id="radio1" value="0" ><label for="radio1">In-Active</label>
                                                        @else
                                                        <input type="radio" name="optradio" id="radio" value="1" ><label for="radio">Active</label>
                                                        <input type="radio" name="optradio" checked  id="radio1" value="0"><label for="radio1">In-Active</label>
                                                        @endif
                                            </div>
                                        </div>

                                        @endforeach
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
