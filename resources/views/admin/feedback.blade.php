@extends('admin.layout.app')
@if(session('successMsg'))
<div class="alert alert-success" role="alert">
    {{session('successMsg')}}
</div>
@endif
@section('main_content')
@csrf
<form action="" method="get">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User id</th>
                <th>Name</th>
                <th>email</th>
                <th>Feedback</th>
                <th>Rating</th>
                <th>Query</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($feedbac as $f)
            <tr>
                <th scope="row">{{ $f->id }}</th>
                <td>{{ $f->user_id }}</td>
                <td>{{ $f->name }}</td>
                <td>{{ $f->email }}</td>
                <td>{{ $f->feedbackin }}</td>
                <td>{{ $f->rating }}</td>
                <td>{{ $f->query }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</form>
@endsection