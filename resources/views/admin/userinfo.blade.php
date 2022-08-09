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
                <th>Name</th>
                <th>email</th>
                

            </tr>
        </thead>
        <tbody>
            @foreach ($user as $u)
            <tr>
                <th scope="row">{{ $u->id }}</th>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</form>
@endsection