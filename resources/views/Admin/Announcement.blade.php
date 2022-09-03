@extends('Admin.admin_main')
@section('admin_main_section')
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
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}</div>
            @endif
            <div>
                <h1>Announcement</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ $url }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @php
                                    $s = session()->get('profile_data');
                                @endphp
                                <input type="hidden" name="id" value="{{ $s[0]->id }}">
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
