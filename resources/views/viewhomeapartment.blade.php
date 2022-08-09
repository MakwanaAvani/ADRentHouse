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
            <div class="row">
                <div class="col-lg-3 offset-lg-10">
                    <div class="form-group">
                        <h5>Select Property</h5>
                        <form method="get" action="{{route('filter')}}" id="filt">
                            @csrf
                            <select name="categories" id="categories">
                                <option>Select</option>
                                @if(count($category)>0)
                                @foreach($category as $categories)
                                <option value="{{$categories->id}}">{{$categories->catname}}</option>
                                @endforeach
                                <option value="0">both</option>
                                @endif
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($property as $por)
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('cover/'.$por['cover'])}}" class="img-responsive" style="max-height: 200px; max-width: 350px;" alt="">
                        </div>
                        <div class="down-content">
                            @if($por['cat_id']==1)
                            <span>Independent Home</span><br>
                            @endif
                            @if($por['cat_id'] ==2)
                            <span>Apartment</span><br>
                            @endif
                            <label>Room:</label>
                            <h4>{{$por['room']}}</h4>
                            <label>Address:</label>
                            <p>{{$por['addr1']}}</p>
                            <ul class="social-icons">
                                <li><a href="viewhouse/{{$por['id']}}">+ Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                @endforeach
            </div>


    </section>

    <!-- <script type="text/javascript">
        $(document).ready(function() {
            $("#categories").on("change", function() {
                var category = $(this).val();
                $.ajax({
                    type: "get",
                    url: "{{ route('filter') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "category": category
                    },
                    success: function(data) {
                        console.log(data)
                        alert(data);
                        var property = data.property;
                       // if (property.length > 0) {
                            //for (var key in data) {
                                //var value = data[key];
                              //  html += '<div><span>' + key + ':' + value + '</span></div>'
                            //}
                           // $("#show").append(JSON.stringify(html));

                        //}

                    }
                });
            })
        });
    </script> -->
    <script>
        $('#filt').on('change', function(e) {
            $(this).closest('form').submit();
        });
    </script>
</body>

</html>
@endsection