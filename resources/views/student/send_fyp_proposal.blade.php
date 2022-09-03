@extends('student.std_main')
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if (Session::get('failed'))
                            <span class="text-danger">
                                {{ Session::get('failed') }}
                            </span>
                        @endif
                        @if (Session::get('success'))
                            <span class="text-success">
                                {{Session::get('success')}}
                            </span>
                        @endif
                            <form action="{{ $url }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @php
                                    $s = session()->get('profile_data');
                                @endphp
                                <input type="hidden" name="senderid" value="{{ $s[0]->id }}">
                                <label for="supervisor">Supervisor</label>
                                <select name="supervisor" id="supervisor" class="form-control">
                                    <option value="">Select the supervisor...</option>
                                    @foreach ($teacher as $tea)
                                        <option value="{{ $tea->id }}">{{ $tea->teacher_name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('supervisor')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <br>
                                <label for="project_partner">Project Partner</label>
                                <select name="project_partner[]" multiple id="project_partner"
                                    class="form-control selectpicker" multiple>
                                    <option disabled>Select project partner...</option>
                                    @foreach ($student as $tea)
                                        <option value="{{ $tea->id }}">{{ $tea->std_reg_no }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('project_partner')
                                        {{ $message }}
                                    @enderror
                                </span>
                                @if (Session::get('fail'))
                                    <span class="text-danger">
                                        {{ Session::get('fail') }}
                                    </span>
                                @endif



                                <br>
                                <label for="projact">Project idea's (suggested by Supervisors)</label>
                                <select name="projact1" id="projact" class="form-control">
                                    <option value="">Select Optional Project...</option>
                                    @foreach ($projact as $tea)
                                        <option value="{{ $tea->proj_id }}">{{ $tea->proj_name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('projact1')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <br>
                                <h5>Or</h5>
                                <label for="projact">Own Project idea's</label>
                                <input type="text" name="projact" id="projact" class="form-control"
                                    placeholder="Enter your Projact title">
                                <span class="text-danger">
                                    @error('projact')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <br>
                                <textarea class="summernote" name="discription" id="" cols="20" rows="10">
                                   </textarea>
                                <span class="text-danger">
                                    @error('discription')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <br>
                                <button id="save" class="btn btn-success btn-rounded" type="submit">Send</button>
                            </form>
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
