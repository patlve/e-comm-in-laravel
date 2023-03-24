@extends('master')
@section("content")
<div class="container custom-product">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <div class="custom-product">
        <h2>Carousel Example</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                @foreach ($product as $item)

                <div class="item {{$item['id']== 1?'active':''}}">
                  <a href="detail/{{$item['id']}}">
                  <img class="slider-img" src="{{$item['galary']}}">
                    <div class=" carousel-caption slider-text">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                  </a>
                </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



        <div class="trending-wrapper">

            <h3>trending product</h3>
                        @foreach($product as $item)
            <!-- <div class="item {{$item['id']== 1?'active':''}}"> -->
                <div class="trending-item">
                <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['galary']}}">
                    <div class="">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </div>
                </a>

                @endforeach

            </div>
        </div>

    </div>
    @endsection