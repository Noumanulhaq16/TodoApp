@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="card col-sm-8 offset-2">
            <div class="card-body pb-2">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Date</label>
                                <input type="datetime-local" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Add New Catagory</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group mb-3">
                                <label class="form-label">Work</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option selected disabled> </option>
                                    <option>Pending</option>
                                    <option>Completed</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Catagory</label>
                                <select class="form-select">
                                    <option selected disabled></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
