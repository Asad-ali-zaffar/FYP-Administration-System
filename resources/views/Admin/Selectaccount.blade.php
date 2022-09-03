@extends('Admin.admin_main')
@section('admin_main_section')
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="content-body">

        <div class="col-lg-5 col-sm-6">
            <div class="card gradient-7">
                <div class="card-body">
                    <div class="modal-header">
                        <h4>Select Account For Chat</h4>
                    </div>
                    <div class="modal-body">
                        @foreach ($teacher as $val)
                            <li> <a href="/chatpagetwo/{{ $val->id }}">{{ $val->teacher_name }}</a> </li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
