@extends('master')
@section("content")


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <div class="custom-product">
            <div class="col-sm-10">
                <div class="trending-wrapper">
                    <h4>Result for product</h4>
                    <a href="ordernow" class="btn btn-success">ORDER NOW</a> <br><br>
                    @foreach($products as $item)
                    <div class="row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->galary}}" alt="">
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                        </div>
                    </div>

                    @endforeach
                </div>
             
            </div>
        </div>
        @endsection