<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <title> {{ config('app.name', 'Laravel') }}| Find Comfortable House</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
</head>

<body>
    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><a href="{{route('dashboard')}}"><span>AD</span>Rental House</a></div>
                    <ul class="progress-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>Personal<br><span>30 secs to complete</span></p>
                        </li>
                        <li class="step">
                            <span>2</span>
                            <p>Room Details<br><span>30 secs to complete</span></p>
                        </li>
                        <li class="step">
                            <span>3</span>
                            <p>Image<br><span>30 secs to complete</span></p>
                        </li>
                    </ul>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-one form-step active">
                        <div class="bg-svg"></div>
                        <h2>Owner Information</h2>
                        <p>Enter Information correctly</p>
                        <div>
                            <lable>Full Name</lable>
                            <input type="text" name="name" placeholder="e.g John paul" value="{{old('name')}}">
                            <span class="text-danger">@error('name') {{$message}}@enderror</span>
                        </div>
                        <div>
                            <lable>Email</lable>
                            <input type="email" name="email" placeholder="e.g Johnpaul@gmail.com" value="{{old('email')}}">
                            <span class="text-danger">@error('email') {{$message}}@enderror</span>
                        </div>
                        <div>
                            <lable>Phone no.</lable>
                            <input type="text" name="phone" placeholder="e.g +919985631275" value="{{old('phone')}}">
                            <span class="text-danger">@error('phone') {{$message}}@enderror</span>
                        </div>
                        <div class="radio">
                            <lable>You're Looking to...</lable>
                            <div class="radio">
                                @foreach($category as $cat)
                                <input type="radio" name="rentype" value="{{$cat->id}} " value="{{old('rentype')}}"><label>{{$cat->catname}}</label>
                                <!-- <input type="radio" name="rentype" value="2"><label>Apartment</label> -->
                                @endforeach
                            </div>
                            <span class="text-danger">@error('rentype') {{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-two form-step">
                        <div class="bg-svg"></div>
                        <h2>Address Information</h2>
                        <div>
                            <lable>Address</lable>
                            <input type="text" name="addr1" placeholder="Street Address" value="{{old('addr1')}}"> 
                            <span class="text-danger">@error('addr1') {{$message}}@enderror</span>
                        </div>
                        <div>
                            <input type="text" name="addr2" placeholder="App, Suite, Building" value="{{old('add2')}}">
                            <span class="text-danger">@error('addr2') {{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-three form-step">
                        <div class="bg-svf"></div>
                        <h2>Tell us about your property</h2>
                        <div class="radio">
                            <lable>Add Room Detaile</lable>
                            <input type="radio" name="room" id="room1" value="1" value="{{old('room')}}">1
                            <input type="radio" name="room" id="room2" value="2">2
                            <input type="radio" name="room" id="room3" value="3">3
                            <input type="radio" name="room" id="room4" value="4">4
                            <span class="text-danger">@error('room') {{$message}}@enderror</span>
                        </div>
                        <div>
                            <input type="number" name="floor" placeholder="Floor" value="{{old('floor')}}">
                            <span class="text-danger">@error('floor') {{$message}}@enderror</span>
                        </div>
                        <div class="radio">
                            <lable>Age of property</lable>
                            <input type="radio" name="age" id="agezerotoone" value="0-1 years" value="{{old('age')}}"><label>0-1 years</label>
                            <input type="radio" name="age" id="ageonetofive" value="1-5 years"><label>1-5 years</label>
                            <input type="radio" name="age" id="agefivetoten" value="5-10 years"><label>5-10 years</label>
                            <input type="radio" name="age" id="agetenmore" value="10+ years"><label>10+ years</label>
                            <span class="text-danger">@error('age') {{$message}}@enderror</span>
                        </div>
                        <div class="checkbox">
                            <label>Willing to rent out to</label>
                            <input type="checkbox" name="rentout[]" value="Family"><label> Family</label>
                            <input type="checkbox" name="rentout[]" value="Single men"><label> Single men</label>
                            <input type="checkbox" name="rentout[]" value="Single women"><label> Single women</label>
                        </div>
                        <div>
                            <input type="number" name="rentprice" placeholder="Expected Rent" value="{{old('rentprice')}}">
                            <span class="text-danger">@error('rentprice') {{$message}}@enderror</span>
                        </div>
                        <div>
                            <lable>About Property for other things</lable>
                            <textarea name="aboutpeoperty" id="" cols="30" rows="10" value="{{old('aboutproperty')}}"></textarea>

                        </div>
                        <div>
                            <label>Cover Upload Image</label>
                            <input type="file" name="cover" multiple accept=".jpg, .jpeg, .png" value="{{old('cover')}}">
                            <!-- <span class="text-danger">@error('cover') {{$message}}@enderror</span> -->
                        </div>
                        <div>
                            <label>Upload Image</label>
                            <input type="file" name="images[]" multiple accept=".jpg, .jpeg, .png" value="{{old('images[]')}}">
                            <!-- <span class="text-danger">@error('image[]') {{$message}}@enderror</span> -->
                        </div>

                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn-prev" disabled>Back</button>
                        <button type="button" class="btn-next">Next Step</button>
                        <button type="submit" class="btn-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/script.js')}}"></script>

    <!-- ***** Footer Start ***** -->
    @include('layouts.common.footer')
</body>

</html>