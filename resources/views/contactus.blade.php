@extends('layouts.app')

@section('main_content')
@csrf
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <br>
  <br><br><br>
  </section>
  <section class="content-header ">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Contact us</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <form method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2>AD<strong> Rent House</strong></h2>
              <p class="lead mb-5">Movdi Chowk, Rajkot<br>
                Phone: +1 234 56789012
              </p>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" name="name" class="form-control" />
            </div>
            <span class="text-danger">@error('name') {{$message}}@enderror</span>
            <div class="form-group">
              <label for="inputEmail">E-Mail</label>
              <input type="email" name="email" class="form-control" />
            </div>
            <span class="text-danger">@error('email') {{$message}}@enderror</span>
            <div class="form-group">
              <label for="inputSubject">Subject</label>
              <input type="text" name="subject" class="form-control" />
            </div>
            <span class="text-danger">@error('subject') {{$message}}@enderror</span>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" name="message" class="form-control" rows="4"></textarea>
            </div>
            <span class="text-danger">@error('message') {{$message}}@enderror</span>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Send message">
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection