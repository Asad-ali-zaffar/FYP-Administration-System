@extends('student.std_main')
@section('main_section')
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
                    @if (Session::get('success'))
                    <div class="alert alert-success">
                    {{Session::get('success')}}</div>
                    @endif

                    <div class="card card-body bg-light p-4">
                         
                        <form action="{{ url('send_again') }}/{{ $user->Notifications[0]->id }}" method="post">
                            @csrf
                            {{-- // "heading":"Online Learning","id":"4","senderid":"4","name":"send again","team":null,"taskid":"40","url":"send_again" --}}
                            {{-- {{ App\Models\registration::getUserNameByID($value->user_id)}} --}}
                            @php
                               $d= App\Models\SetTask::getUserNameByID($user->Notifications[0]->data['taskid']);
                            //    App\Models\SetTask::getUserNameByID($value->user_id)
                            @endphp
                            <input type="hidden" name="taskid" value="{{ $user->notifications[0]->data['taskid'] }}">
                            <div class="form-group">
                                <label for="projact">Projact Name</label>
                               
                                
                                    <input type="text"                                    
                                        value="{{App\Models\Projact::getUserNameByID($d)}}"
                                        readonly class="form-control" id="title" aria-describedby="emailHelp"
                                        placeholder="Enter shadule title" name="title">                               
                                
                                <span class="text-danger">
                                    @error('projact')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <input type="hidden" name="tosend" value="{{ $user->Notifications[0]->data['id'] }}">
                            <input type="hidden" name="senderid" value="{{ $user->Notifications[0]->notifiable_id }}">
                            
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" class="summernote" id="description" aria-describedby="description" name="description"
                                    rows="5">{{$user->Notifications[0]->data['name']}} </textarea>
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
