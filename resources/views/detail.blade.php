@extends('master')
@section("content")
<div class="container">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['galary']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">go back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Details : {{$product['description']}}</h4>
            <h4>Category : {{$product['category']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf

                <input type="hidden" name="product_id" id="" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to card</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>
@endsection