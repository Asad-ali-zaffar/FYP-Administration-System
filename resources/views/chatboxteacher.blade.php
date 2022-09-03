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
            <div class="container">
                <div class="row">
                    <div class="col">
                        <center>
                            <div class="card" style="width: 50rem;
                        margin-top: 100px; padding:10px;">
                                <div class="card-body" id="msgBody">
                                    @foreach ($teacher as $valname)
                                        <h5 class="card-title text-dark"> Chat With: {{ $valname->admin_name }}

                                        </h5>
                                    @endforeach
                                    <form action="/sendmessage_teacher" method="POST">

                                        @csrf

                                        <input type="hidden" value='{{ $id }}' name="toUser" id="toUser">

                                        <input type="hidden" value='{{ $fromuser }}' name="fromuser" id="fromuser">
                                        {{-- <input type="text" value='{{ request()->route('id') }}'' name="touser" id="toUser"> --}}



                                        {{-- <input type="text" value='{{ session()->get('USER_id') }}'' name="fromUser" id="toUser" hidden> --}}
                                        {{-- {{ $datid->User }} --}}

                                        @foreach ($chats as $chat)
                                            @if ($chat->FromUser == session()->get('UserTwo'))
                                                <div style="text-align: right; ">
                                                    <p
                                                        style="background-color:lightblue; word-wrap:break-word; display:inline-block; padding:5px; border-radius:10px; max-width:70%; ">
                                                        {{ $chat->Messages }}</p>
                                                </div>
                                            @else
                                                <div style="text-align: left; ">
                                                    <p
                                                        style="background-color:#ffffb4; word-wrap:break-word; display:inline-block; padding:5px; border-radius:10px; max-width:70%; ">
                                                        {{ $chat->Messages }}</p>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div class="modal-footer">
                                            <textarea id="message" name="message" class="form-control" style="height: 70px;"></textarea>
                                            <button class="btn btn-primary" id="send" style="height: 70%;">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
