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
                    <h1>Feedback</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body row">
                    <div class="col-7">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control" />
                            <span class="text-danger">@error('name') {{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">E-Mail</label>
                            <input type="email" name="email" class="form-control" />
                            <span class="text-danger">@error('email') {{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="inputSubject">Subject</label><br>
                            <select name="sefeedback">
                                <option>Select Feedback</option>
                                <option value="report">I Want to report a problem</option>
                                <option value="suggestion">I have a suggestion</option>
                                <option value="compliment">I Want to compliment</option>
                                <option value="other">other</option>
                            </select>
                            
                        </div>
                        <span class="text-danger">@error('sefeedback') {{$message}}@enderror</span>
                        <div class="form-group">
                            <label for="inputMessage">Rating</label>
                        </div>
                        <div class="form-group">
                            <div class="rating">
                                <input type="radio" name="rating" value="5" id="5">
                                <label for="5">☆</label>
                                <input type="radio" name="rating" value="4" id="4">
                                <label for="4">☆</label>
                                <input type="radio" name="rating" value="3" id="3">
                                <label for="3">☆</label>
                                <input type="radio" name="rating" value="2" id="2">
                                <label for="2">☆</label>
                                <input type="radio" name="ratin" value="1" id="1">
                                <label for="1">☆</label>
                            </div>
                        </div>
                        <span class="text-danger">@error('rating') {{$message}}@enderror</span>

                        <br /><br />
                        <div class="form-group">
                            <label for="inputMessage">Query</label>
                            <textarea id="messg" name="mess" class="form-control" rows="4"></textarea>
                            <span class="text-danger">@error('mess') {{$message}}@enderror</span>
                        </div>
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