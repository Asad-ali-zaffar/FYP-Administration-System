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
                        <div class="float-start">
                            <h4 class="pb-3">Send Proposal again </h4>
                        </div>
                        @php
                            $user = session()->get('user');
                        @endphp
                        <div class="clearfix"></div>
                    </div>

                    <div class="card card-body bg-light p-4">
                        <form action="{{ url('send_again') }}/{{ $user->Notifications[0]->id }}" method="post">
                            @csrf
                            {{-- "heading":"Freelancing","id":"1","name":"Send full information","url":"send_again" --}}
                            {{-- {{ App\Models\registration::getUserNameByID($value->user_id)}} --}}
                            <input type="hidden" name="taskid" value="{{ $user->notifications[0]->data['taskid'] }}">
                            <div class="form-group">
                                <label for="projact">Projact Name</label>
                                @if (is_numeric($user->notifications[0]->data['proname']))
                                    <input type="text"
                                        value="{{ App\Models\Projact::getUserNameByID($user->notifications[0]->data['proname']) }}"
                                        readonly class="form-control" id="title" aria-describedby="emailHelp"
                                        placeholder="Enter shadule title" name="title">
                                @else
                                    <input type="text" value="{{ $user->Notifications[0]->data['proname'] }}" readonly
                                        class="form-control" id="title" aria-describedby="emailHelp"
                                        placeholder="Enter shadule title" name="title">
                                @endif
                                <span class="text-danger">
                                    @error('projact')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <input type="hidden" name="tosend" value="{{ $user->Notifications[0]->data['id'] }}">
                            <input type="hidden" name="senderid" value="{{ $user->Notifications[0]->notifiable_id }}">
                            @foreach ($user->Notifications as $noti)
                            @endforeach
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

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
