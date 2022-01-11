@extends('layout.master')
@section('content')
<div class="container">
                @if(Session::has('status'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ Session::get('status') }} </strong>
                    </div>
                 @endif
    <div class="row">
        <div class="card col-sm-8 ">
                
            <div class="card-body pb-2">
            
                <form action="{{route('addcategory')}}" method="Post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6" style="margin:auto">
                            <div class="form-group mb-3 ">
                                <label class="form-label">Category</label>
                                <input type="text" class="form-control" name="category_name">
                                <span class="alert text-danger alert-block">{{$errors->first('category_name')}}</span>
                            </div>
                            <div class="mb-3 ">
                                <button type="submit" style="margin-left:30%" class="btn btn-outline-theme btn-lg d-block w-50">Add Category</button>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
