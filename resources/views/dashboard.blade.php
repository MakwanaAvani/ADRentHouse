@extends('layouts.app')

@section('main_content')
@csrf
<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="{{ asset('assets/images/video.mp4')}}" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Happy Housewarming Wishes</h6>
            <h2><em>Rent a house</em> at comfortable live</h2>
            <div class="main-button">
                <a href="{{ route('contactus') }}">Contact Us</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Offers Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Check Rent <em>Property</em></h2>
                    <img src="{{ asset('assets/images/line-dec.png')}}" alt="">
                    <p>At Rental House we pride ourselves with providing great housing at a great value.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($property as $por)
            @csrf
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset('cover/'.$por->cover)}}" class="img-responsive" style="max-height: 200px; max-width: 350px;" alt="">
                    </div>
                    <div class="down-content">
                        @if(($por->cat_id) =='1')
                        <span>Independent Home</span><br>
                        @endif
                        @if(($por->cat_id) =='2')
                        <span>Apartment</span><br>
                        @endif
                        <label>Room:</label>
                        <h4>{{$por->room}}</h4>
                        <label>Address:</label>
                        <p>{{$por->addr1}}</p>
                        <ul class="social-icons">
                            <li><a href="{{route('viewhomeapartment')}}">+ Read More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            @endforeach
        </div>
        <br>
        <div class="main-button text-center">
            <a href="{{ route('viewhomeapartment') }}">View Rent House & Apartment</a>
        </div>
    </div>
</section>
<!-- ***** Offers Ends ***** -->

<section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading dark-bg">
                    <h2>Read <em>About Us</em></h2>
                    <img src="{{ asset('assets/images/line-dec.png')}}" alt="">
                    <p>At Rental House we pride ourselves with providing great housing at a great value.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-content text-center">
                    <p>Who we are AD Rent House is the largest and newest company in the house rental business in Rajkot.Through our one year of experience we have built up a huge network including embassies and companies. </p>

                    <p>AD Rent House our staff are trained professionals with experience and expertise in the AD Rental Market.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<!-- ***** Testimonials Item Start ***** -->
<section class="section" id="features">

</section>
<!-- ***** Testimonials Item End ***** -->
@endsection