<style>
  .imgs {
    background: #fff0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 300px;
    width: 300px;
    padding: 10px;
    margin-top: 40px;
  }
</style>
@extends('layouts.app')

@section('main_content')
@csrf
<br><br>
<div class="container">
  <div class="col-lg-6  offset-lg-3">
    <div id="myCarousel" class="carousel" data-type="carousel" data-animation="dragX">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to=0 class="active"></li>
      </ol>
      <div class="carousel-inner">

        @foreach ($image as $key=>$img)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
          <img src="{{ asset('rental/'.$img['image']) }}" class=" d-block mx-auto imgs" alt="" srcset="">
        </div>
        @endforeach

      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  @csrf
  <div class="row" style=" margin-top: 20px;">
    <div class="col-lg-4">
      <div class="trainer-item">
        <div class="down-content">
          <h4>Onwer Information</h4>
          <label>Name:</label>
          <label>
            <p>{{$profind['owner_name']}}</p>
          </label><br>
          <label>Email:</label><label>
            <p>{{$profind['email']}}</p>
          </label><br>
          <label>Phone:</label><label>
            <p>{{$profind['phone']}}</p>
          </label>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="trainer-item">
        <div class="image-thumb">
        </div>
        <div class="down-content">
           @if(($profind['cat_id']) =='1')
            <h4>Independent Home</h4>
            @endif
            @if(($profind['cat_id']) =='2') 
            <h4>Apartment</h4>
            @endif
          <label>Room:</label>
          <label>
            <p>{{$profind['room']}}</p>
          </label>&nbsp;
          <label>Floor:</label><label>
            <p>{{$profind['floor']}}</p>
          </label><br>
          <label>Address:</label>
          <p>{{$profind['addr1']}}</p>
          <p>{{$profind['addr2']}}</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="trainer-item">
        <div class="down-content">
          <h4>Property Information</h4>
          <label>Age of property:</label>
          <label>
            <p>{{$profind['age_property']}}</p>
          </label><br>
          <label>Rent out:</label><label>
            <p>{{$profind['rent_out']}}</p>
          </label><br>
          <label>Price:</label><label>
            <p>{{$profind['price']}}</p>
          </label><br>
          <label>About:</label><label>
            <p>{{$profind['about_property']}}</p>
          </label>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection