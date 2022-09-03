@extends('main')
@section('main_section')


    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="container">
                    <div>
                        <div class="float-start">
                            <h4 class="pb-3">Describe the Reason for canceling the proposal</h4>
                        </div>
                        @php

                        $user=session()->get('user');
                        @endphp
                        <div class="clearfix"></div>
                    </div>

                    <div class="card card-body bg-light p-4">
                        <form action="{{url('cancle')}}/{{$id}}" method="post">
                            @csrf
                            {{-- {{ App\Models\registration::getUserNameByID($value->user_id)}} --}}
                            <div class="form-group">
                                <label for="projact">Projact Name</label>
                                @if (is_numeric($user->Notifications[0]->data['proname']))
                                @php
                                   $m= App\Models\Projact::getStudentNameById($user->Notifications[0]->data['proname']);
                                @endphp
                                <input type="text" value="{{$m[0]->proj_name}}" name="title" readonly class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter shadule title" >
                                @else
                                <input type="text" value="{{ $user->Notifications[0]->data['proname']}}
                                " readonly class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter shadule title" >

                                @endif
                                {{-- <input type="hidden" value="{{$user->Notifications[0]->data['proname']}}" readonly class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter shadule title" name="title"> --}}

                                <span class="text-danger">
                                    @error('projact')
                                        {{ $message }}
                                    @enderror
                                </span>
                              </div>
                              <input type="hidden" name="tosend" value="{{$user->Notifications[0]->data['id']}}">
                              <input type="hidden" name="senderid" value="{{$user->Notifications[0]->notifiable_id}}">
                           @if (!is_null($user->Notifications[0]->data['team']))
                           @foreach ($user->Notifications[0]->data['team'] as $value )
                           <input type="hidden" name="team[]" value="{{$value}}">
                           @endforeach
                           @endif

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" class="form-control" id="description" aria-describedby="description" name="description" rows="5"> </textarea>
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
