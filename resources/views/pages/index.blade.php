@extends('layout.master')
@section('content')
<table class="table mb-0">
    <thead>
        <tr>
            <th>#</th>
            <th>Work</th>
            <th>Reminder Time</th>
            <th>Category</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody >
        <tr>
            <td>NoData</td>
            <td>NoData</td>
            <td>NoData</td>
            <td>NoData</td>
            <td>NoData</td>
            <td>
                <a class="btn"><i class="far fa-edit"></i></a>
                <a class="btn"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
