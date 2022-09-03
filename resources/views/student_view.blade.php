
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
                                                <th scope="col"> Name</th>
                                                <th scope="col"> Email</th>
                                                <th scope="col"> Address</th>
                                                <th scope="col"> Phone no</th>
                                                <th scope="col"> Registeration no</th>
                                                <th scope="col"> Semster no</th>
                                                <th scope="col"> Deptment</th>
                                                <th scope="col"> Program</th>
                                                <th scope="col"> Session</th>
                                                <th scope="col">Program status  </th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i=1;
                                        @endphp
                                            @foreach ($dept as $valu)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $valu->std_name }}</td>
                                                <td>{{ $valu->email }}</td>
                                                <td>{{ $valu->std_address }}</td>
                                                <td>{{ $valu->std_phone_num }}</td>
                                                <td>{{ $valu->std_reg_no }}</td>
                                                <td>{{ $valu->std_semster_no }}</td>
                                                <td>
                                                    @foreach ($valu->getDepartment as  $dpt)
                                                        {{$dpt->dep_name}}
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($valu->getprogram as  $dpt)
                                                    {{$dpt->prog_name}}
                                                @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($valu->getSession as  $dpt)
                                                    {{$dpt->ses_Name}}
                                                @endforeach
                                                </td>
                                                <td>
                                                    @if($valu->std_status == "1")
                                                   <a href="{{url('/student-status')}}/{{$valu->id}}/0"><span class="badge badge-primary px-2">Active</span></a>
                                                    @else
                                                    <a href="{{url('/student-status')}}/{{$valu->id}}/1"><span class="badge badge-danger px-2">Inactive</span></a>
                                                    @endif
                                                </td>
                                                <td><span><a href="{{url('/student-register')}}/{{ $valu->id }}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="{{url('/student-register_delete')}}/{{ $valu->std_id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a></span>
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

