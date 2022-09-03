
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
                                                <th scope="col">Commitee Member Name</th>
                                                <th scope="col">Commitee Member_Desigination </th>
                                                <th scope="col">Datails</th>
                                                <th scope="col">Department </th>
                                                <th scope="col">Teacher </th>
                                                <th scope="col">Commitee Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i=1;
                                        @endphp
                                            @foreach ($fyp as $valu)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $valu->com_member_name }}</td>
                                                <td>{{ $valu->com_member_desigination }}</td>
                                                <td>{{ $valu->com_datails }}</td>
                                                @foreach ($valu->getDpt as $val)
                                                <td>{{ $val->dep_name }}</td>
                                                @endforeach
                                                @foreach ($valu->getTeacher as $val)
                                                <td>{{ $val->teacher_name }}</td>
                                                @endforeach
                                                <td>
                                                    @if($valu->com_status == "1")
                                                   <a href="{{url('/fypcommittee_status')}}/{{$valu->com_id}}/0"><span class="badge badge-primary px-2">Active</span></a>
                                                    @else
                                                    <a href="{{url('/fypcommittee_status')}}/{{$valu->com_id}}/1"><span class="badge badge-danger px-2">Inactive</span></a>
                                                    @endif
                                                </td>
                                                <td><span><a href="{{url('/fypcommittee_edit')}}/{{ $valu->com_id }}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="{{url('/fypcommittee_delete')}}/{{ $valu->com_id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a></span>
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

