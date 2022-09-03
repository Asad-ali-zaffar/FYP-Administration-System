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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $title }}</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle" id="myTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Session Name</th>
                                                <th scope="col">Session Start date  </th>
                                                <th scope="col">Session End date</th>
                                                <th scope="col">Session status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i=1;
                                        @endphp
                                            @foreach ($session as $valu)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $valu->ses_Name }}</td>
                                                <td>{{ $valu->start_date }}</td>
                                                <td>{{ $valu->end_date }}</td>
                                                <td>
                                                    @if($valu->ses_status == "1")
                                                   <a href="{{url('/session/status')}}/{{$valu->ses_id}}/0"><span class="badge badge-primary px-2">Active</span></a>
                                                    @else
                                                    <a href="{{url('/session/status')}}/{{$valu->ses_id}}/1"><span class="badge badge-danger px-2">Inactive</span></a>
                                                    @endif
                                                </td>
                                                <td><span><a href="{{url('/session/edit')}}/{{ $valu->ses_id }}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="{{url('/session/delete')}}/{{ $valu->ses_id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a></span>
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

