<style>
    .imga {
        height: 400px;
        width: 800px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        color: #04032c;
    }

    .teco {
        color: #04032c;
    }
</style>
@extends('layouts.app')

@section('main_content')
@csrf


<section class="section" id="our-classes">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Read<em> About Us</em></h2>
                    <img src="{{ asset('assets/images/line-dec.png')}}" alt="">
                    <p>At Rental House we pride ourselves with providing great housing at a great value.</p>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-2">
                <img src="{{ asset('assets/images/aboutusback.png')}}" class="imga" alt="">
                <hr>
            </div>
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Rent a house at comfortable live</h2>
                    <p>Who we are AD Rent House is the largest and newest company in the house rental business in Rajkot.Through our one year of experience we have built up a huge network including embassies and companies. </p>

                    <p>AD Rent House our staff are trained professionals with experience and expertise in the AD Rental Market.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="trainer-item">
                    <div class="image-thumb">
                        {{-- <img src="{{asset('cover/'.$por->cover)}}" class="img-responsive" style="max-height: 200px; max-width: 350px;" alt=""> --}}
                    </div>
                    <div class="down-content">
                        <h4 class="teco">Phone</h4><br>
                        <label>+1 234 56789012</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="trainer-item">
                    <div class="image-thumb">
                        {{-- <img src="{{asset('cover/'.$por->cover)}}" class="img-responsive" style="max-height: 200px; max-width: 350px;" alt=""> --}}
                    </div>
                    <div class="down-content">
                        <h4 class="teco">Email</h4><br>
                        <label>adrenthouse@gmail.com</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="trainer-item">
                    <div class="image-thumb">
                        {{-- <img src="{{asset('cover/'.$por->cover)}}" class="img-responsive" style="max-height: 200px; max-width: 350px;" alt=""> --}}
                    </div>
                    <div class="down-content">
                        <h4 class="teco">Opening Hours</h4><br>
                        <label>Mon.-Fri 9 AM - 4 PM</label>
                        <label>Sunday by appoinment</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="trainer-item">
                    <div class="image-thumb">
                        {{-- <img src="{{asset('cover/'.$por->cover)}}" class="img-responsive" style="max-height: 200px; max-width: 350px;" alt=""> --}}
                    </div>
                    <div class="down-content">
                        <h4 class="teco">Address</h4><br>
                        <label>Mavdi Chowk, Rajkot</label>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</section>
</section>
</div>

@endsection