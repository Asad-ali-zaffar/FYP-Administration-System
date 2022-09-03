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
                                                <th scope="col">Teacher Name</th>
                                                <th scope="col">Student Name</th>
                                                {{-- <th scope="col">Status</th>
                                                <th scope="col">Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i=1;
                                        @endphp
                                            @foreach ($AllocateTeacher as $valu)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                @foreach ($valu->getTeacher as $value)
                                                <td>{{ $value->teacher_name }}</td>
                                                @endforeach
                                                {{-- @foreach ($valu->getStudent as $value)
                                                <td>{{ $value->std_name}}</td>
                                                @endforeach --}}
                                                @php
                                                    $data=App\Models\Student_model::getStudentNameById($valu->std_id);
                                                @endphp
                                                <td>{{$data[0]->std_name}}</td>
                                                
                                            </tr>
                                            @php
                                            $i++;    
                                            @endphp
                                            
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

