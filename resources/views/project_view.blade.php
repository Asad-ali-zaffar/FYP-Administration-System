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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $titel }}</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle" id="myTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Project Name</th>
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Superviser Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i=1;
                                        @endphp
                                            @foreach ($project as $valu)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $valu->proj_name }}</td>
                                                @foreach ($valu->getStudent as $val)
                                                <td>{{ $val->std_name }}</td>
                                                @endforeach
                                                <td>{{ App\Models\Teacher::getUserNameById($valu->superviser_id)}}</td>
                                                <td><span><a href="{{url('/project_edit')}}/{{ $valu->proj_id }}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="{{url('/project_delete')}}/{{ $valu->proj_id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                                @php
                                                    $i++;
                                                @endphp
                                            </tr>
                                            @endforeach
                                          </tbody>
                                    </table>
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

