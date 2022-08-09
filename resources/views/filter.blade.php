@extends('layouts.app')

@section('main_content')
@csrf
<html>

<body>
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Find House & <em>Apartment</em></h2>
                        <img src="{{ asset('assets/images/line-dec.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row" id="row">
                @foreach ($property as $por)
                @csrf
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('cover/'.$por->cover)}}" class="img-responsive" style="max-height: 200px; max-width: 350px;" alt="">
                        </div>
                        <div class="down-content">
                            @if(($por[cat_id] =='1')
                            <span >Independent Home</span><br>
                            @endif
                            @if(($por[cat_id] =='2')
                            <span>Apartment</span><br>
                            @endif
                            <label>Room:</label>
                            <h4>{{$por[room]}}</h4>
                            <label>Address:</label>
                            <p>{{$por[addr1]}}</p>
                            <ul class="social-icons">
                                <li><a href="viewhouse/{{$por[id]}}">+ Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                @endforeach
            </div>
    </section>
</body>

</html>
@endsection