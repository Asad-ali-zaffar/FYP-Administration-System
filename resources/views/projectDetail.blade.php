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
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="{{ url('/projectdetail') }}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="project-Name">Project Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="project" id="project-Name" class="form-control">
                                                    <option >Project Name</option>
                                                    @foreach ($Projact as $valu)
                                                        <option value="{{ $valu->proj_id }}">{{ $valu->proj_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">
                                                    @error('project')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="projectidea"> Project Idea
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="projectidea"
                                                    name="project_idea" value="{{old('project_idea')}}" placeholder="Project Idea">
                                                    <span class="text-danger">
                                                        @error('project_idea')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Existing_System"> Existing
                                                System <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="Existing_System"
                                                    name="existing_system" value="{{old('existing_system')}}" placeholder="Existing System">
                                                    <span class="text-danger">
                                                        @error('existing_system')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Abstract"> Project Abstract
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea name="abstract"  id="Abstract" cols="30" rows="10" class="form-control">{{old('abstract')}}</textarea>
                                                {{--  <input type="textarea" rows="4" cols="50" class="form-control" id="Abstract" name="abstract" placeholder="Project Abstract">  --}}
                                                <span class="text-danger">
                                                    @error('abstract')
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
        <!--**********************************
            Content body end
        ***********************************-->
        @endsection
