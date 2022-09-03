@extends('main')
@section('main_section')
    <!--*******************
                        Preloader start
                    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
                        Preloader end
                    ********************-->
    <!--**********************************
                            Content body start
                        ***********************************-->
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="container">
                    <div>
                        @if (Session::get('success'))
                        <div class="alert alert-success">
                        {{Session::get('success')}}</div>
                        @endif
                        <div class="float-start">
                            <h4 class="pb-3">Send again Task</h4>
                        </div>
                        @php
                            $user = session()->get('user');
                            $profile = session()->get('profile_data');
                        @endphp
                        <div class="clearfix"></div>
                    </div>

                    <div class="card card-body bg-light p-4">
                        <form action="{{ url('send_again_task') }}/{{ $user->Notifications[0]->id }}" method="post">
                            @csrf
                            <input type="hidden" name="taskid" value="{{ $user->notifications[0]->data['setTaskId'] }}">
                            <input type="hidden" name="senderid" value="{{$user->notifications[0]->data['senderid']}}">
                            <div class="form-group">
                                <label for="projact">Projact Name</label>                                
                                    <input type="text" value="{{ $user->Notifications[0]->data['heading'] }}" readonly
                                        class="form-control" id="title" aria-describedby="emailHelp"
                                        placeholder="Enter shadule title" name="title">
                                <span class="text-danger">
                                    @error('projact')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" class="form-control" id="description" aria-describedby="description" name="description"
                                    rows="5"> </textarea>
                                <span class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
