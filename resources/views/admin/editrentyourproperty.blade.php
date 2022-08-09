@extends('admin.layout.app')
@if(session('status'))
<div class="alert alert-success" role="alert">
    {{session('status')}}
</div>
@endif
@section('main_content')
<form action="{{ route('admin.update-rentyourproperty-check',$property->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rent Type</th>
                <th>Owner Name</th>
                <th>email</th>
                <th>Phone</th>
                <th>User id</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $property->id }}</th>
                <td>{{ $property->cat_id }}</td>
                <td>{{ $property->owner_name }}</td>
                <td>{{ $property->email }}</td>
                <td>{{ $property->phone }}</td>
                <td>{{ $property->user_id }}</td>
                <td>
                    <input type="checkbox" name="status" {{ ($property->status==2 ? 'checked' :'') }}>Unactive-1 /Active-2
                </td>

                <td><input type="submit" class="btn btn-outline-primary" value="Save"></td>
            </tr>
        </tbody>
    </table>
</form>

@endsection