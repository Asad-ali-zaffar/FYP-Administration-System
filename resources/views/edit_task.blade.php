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
                            <h4 class="pb-3">Edit Task </h4>
                        </div>
                        <div style="float: right;">
                            <a href="{{ route('task.index') }}" class="btn btn-info">All Task</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="card card-body bg-light p-4">
                        <form action="{{route('task.update',$task->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="projact">Projact Name</label>
                                <select class="form-control" id="projact"  name="projact">
                                    {{-- <option value="">Select Projact</option> --}}
                                    <option value="{{$task->proj_id}}">{{$projact[0]->proj_name}}</option>
                                    @foreach ($projact as $projacts)
                                    <option value="{{$projacts->proj_name}}">{{$projacts->proj_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('projact')
                                        {{ $message }}
                                    @enderror
                                </span>
                              </div>
                            <div class="form-group">
                              <label for="title">Title</label>
                              {{-- <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter email" name="title" value="{{$task->title}}"> --}}
                              <select class="form-control" id="title" name="title">
                                <option value="{{$task->title}}">{{$task->title}}</option>
                                <option value="1st week">1st week</option>
                                <option value="2nd week">2nd week</option>
                                <option value="3rd week">3rd week</option>
                                <option value="4th week">4th week</option>
                                <option value="5th week">5th week</option>
                                <option value="6th week">6th week</option>
                                <option value="7th week">7th week</option>
                                <option value="8th week">8th week</option>
                                <option value="9th week">9th week</option>
                                <option value="10th week">10th week</option>
                                <option value="11th week">11th week</option>
                                <option value="12th week">12th week</option>
                            </select>
                            <span class="text-danger">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" class="form-control" id="description" aria-describedby="description" placeholder="Enter email" name="description" rows="5">{{$task->description}} </textarea>
                                <span class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
                              </div>
                              <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                   @if ($task->status === "unopen")
                                   <option value="unopen">unopen</option>
                                   <option value="working">working</option>
                                    <option value="done">done</option>
                                    @elseif ($task->status === "working")
                                    <option value="working">working</option>
                                   <option value="unopen">unopen</option>
                                    <option value="done">done</option>
                                    @else
                                    <option value="done">done</option>
                                    <option value="working">working</option>
                                   <option value="unopen">unopen</option>
                                   @endif

                                </select>
                                <span class="text-danger">
                                    @error('status')
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
