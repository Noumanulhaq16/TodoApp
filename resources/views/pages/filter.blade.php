@extends('layout.master')
@section('content')

<form class="mb-5" action="{{route('filter')}}" method="POST">
    @csrf
    <label>From:</label>
    <input type="date" name="from" value="{{date('m-d-Y')}}">&nbsp;

    <label>To:</label>
    <input type="date" name="to" value="{{date('m-d-Y')}}">


    <button type="submit" class="btn btn-outline-theme btn-md ">Filter</button>
</form>

<table class="table mb-0 ">

    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Work</th>
            <th>Reminder Time</th>
            <th>Category</th>
            <th>Status</th>

        </tr>
    </thead>
    <tbody >
        @foreach($task as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->work}}</td>
                <td>{{$item->reminderTime}}</td>
                <td>{{$item->category->category_name}}</td>
                <td>{{$item->status}}</td>

            </tr>

        @endforeach
    </tbody>
</table>
@endsection
