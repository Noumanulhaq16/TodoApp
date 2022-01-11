@extends('layout.master')
@section('content')



<table class="table mb-0">
                @if(Session::has('status'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ Session::get('status') }} </strong>
                    </div>
                 @endif

                 @if(Session::has('status2'))
                    <div class="alert alert-danger alert-block">
                        <strong>{{ Session::get('status2') }} </strong>
                    </div>
                 @endif
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Work</th>
            <th>Reminder Time</th>
            <th>Category</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody >
        @forelse($task as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->work}}</td>
            <td>{{$item->reminderTime}}</td>
            <td>{{$item->category->category_name}}</td>
            <td>{{$item->status}}</td>
            <td>
                <a class="btn" href="{{"/edit/".$item->id}}"><i class="far fa-edit"></i></a>
                <a class="btn" href="{{"/delete-task/".$item->id}}"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        @empty
        <tr>
            <td>No</td>
            <td>No</td>
            <td>No</td>
            <td>No</td>
            <td>No</td>
            <td>No</td>

        </tr>
        @endforelse
    </tbody>
</table>
@endsection
