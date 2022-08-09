@extends('admin.layout.app')

@section('main_content')
@csrf
@if(session('status'))
<div class="alert alert-success" role="alert">
    {{session('status')}}
</div>
@endif

<div class="container">


    <div class="row m-5">
        <div class="col-md-12">


<!-- <form action="" method="get" enctype="multipart/form-data"> -->
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rent Type</th>
                <th>Owner Name</th>
                <th>email</th>
                <th>Phone</th>
                <th>Addr1</th>
                <th>Addr2</th>
                <th>Room</th>
                <th>Floor</th>
                <th>Age Property</th>
                <th>Rent out</th>
                <th>price</th>
                <th>About Property</th>
                <th>User id</th>
                <th>status</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($property as $por)
            <tr>
                <th scope="row">{{ $por->id }}</th>
                <td>{{ $por->cat_id }}</td>
                <td>{{ $por->owner_name }}</td>
                <td>{{ $por->email }}</td>
                <td>{{ $por->phone }}</td>
                <td>{{ $por->addr1 }}</td>
                <td>{{ $por->addr2 }}</td>
                <td>{{ $por->room }}</td>
                <td>{{ $por->floor }}</td>
                <td>{{ $por->age_property }}</td>
                <td>{{ $por->rent_out }}</td>
                <td>{{ $por->price }}</td>
                <td>{{ $por->about_property }}</td>
                <td>{{ $por->user_id }}</td>
                <td>{{ $por->status }}</td>
                 <td><img src="{{ asset('cover/'.$por->cover) }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td> 
                <td><a href="editrentyourproperty/{{ $por->id }}" class="btn btn-outline-primary">Update</a></td>
                <td>
                    <form action="/delete/{{ $por->id }}" method="post">
                        <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                        @csrf
                        @method('delete')
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
<!-- </form> -->
</div>
    </div>
</div>
@endsection