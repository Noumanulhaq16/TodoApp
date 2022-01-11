@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="card col-sm-8 ">
            <div class="card-body pb-2">
           
        
                <form action={{route('edit-attempt')}} method="Post">
                    @csrf
                    <input type="hidden" name="id" value="{{$task->id}}">
                    <div class="row">
                        <div class="col-md-6" style="margin:auto">
                            <div class="form-group mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$task->title}}">
                                <span class="alert text-danger alert-block">{{$errors->first('title')}}</span>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label class="form-label">Reminder Time</label>
                                <input type="datetime-local" class="form-control" name="reminderTime" value="{{ old('reminderTime', $updatedformat) }}">
                                <span class="alert text-danger alert-block">{{$errors->first('reminderTime')}}</span>
                            </div>


                            <div class="form-group mb-3">
                                <label class="form-label">Work</label>
                                <input type="text" class="form-control" name="work" value="{{$task->work}}">
                                <span class="alert text-danger alert-block">{{$errors->first('work')}}</span>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status" >
                                    <!-- <option selected disabled> </option> -->
                                    <option value="pending" {{old('status') == 'pending' ? "selected" : ""}}>Pending</option>
                                    <option value="completed" {{old('status') == 'completed' ? "selected" : ""}}>Completed</option>
                                </select>
                                <span class="alert text-danger alert-block">{{$errors->first('status')}}</span>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Catagory</label>
                                <select class="form-select" name="category">
                                    <!-- <option selected disabled></option> -->

                                <!-- <option style="background:transparent;" value ="0" readonly >Select any One</option> -->

                                @foreach ($category as $item)
                                <option value ="{{$item->id}}">{{$item->category_name}}</option>
                                @endforeach
                                    
                                   
                                </select>
                                <span class="alert text-danger alert-block">{{$errors->first('category')}}</span>
                                
                            </div>

                            <div class="mb-3" >
                                <button type="submit" style="margin-left:50%" class="btn btn-outline-theme btn-lg d-block w-50">Update Task</button>
                            </div>




                           
                        </div>
                        <!-- <div class="col-xl-6">
                            
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
