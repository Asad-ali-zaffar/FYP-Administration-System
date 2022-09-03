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
                            <h4 class="pb-3">Create Task</h4>
                        </div>
                        <div style="float: right;">
                            <a href="{{ route('task.index') }}" class="btn btn-info">All Task</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="card card-body bg-light p-4">
                        <form action="{{route('task.store')}}" method="post">
                            @csrf
                            {{-- {{ App\Models\registration::getUserNameByID($value->user_id)}} --}}
                            <div class="form-group">
                                <label for="projact">Projact Name</label>
                                <select class="form-control" id="projact"  name="projact">
                                    <option value="">Select Projact</option>
                                    @foreach ($projact as $projacts)
                                    <option value="{{$projacts->proj_id}}">{{$projacts->proj_name}}</option>
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
                              <select class="form-control" id="title" name="title">
                                <option >Select option</option>
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
                                <textarea type="text" class="form-control" id="description" aria-describedby="description" name="description" rows="5"> </textarea>
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
