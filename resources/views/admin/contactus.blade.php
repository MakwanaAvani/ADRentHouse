@extends('admin.layout.app')
@if(session('successMsg'))
<div class="alert alert-success" role="alert">
    {{session('successMsg')}}
</div>
@endif
@section('main_content')
@csrf
<form action="" method="get" enctype="multipart/form-data">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User id</th>
                <th>Name</th>
                <th>email</th>
                <th>Subject</th>
                <th>Message</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($contactus as $con)
            <tr>
                <th scope="row">{{ $con->id }}</th>
                <td>{{ $con->user_id }}</td>
                <td>{{ $con->name }}</td>
                <td>{{ $con->email }}</td>
                <td>{{ $con->subject }}</td>
                <td>{{ $con->message }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</form>
@endsection