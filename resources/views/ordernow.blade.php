@extends('master')
@section("content")


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="custom-product">
    <div class="col-sm-10">

        <table class="table">

            <tbody>
                <tr>
                    <td>amount</td>
                    <td> {{$total}} FCFA</td>

                </tr>
                <tr>
                    <td>Tax</td>
                    <td> 0 FCFA</td>

                </tr>
                <tr>
                    <td>Delivery</td>
                    <td> 10 FCFA</td>

                </tr>
                <tr>
                    <td>Total amount</td>
                    <td>{{$total+10}} FCFA</td>

                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="post">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="enter your address" class="form-control" id="email"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment method</label> <br> <br>
                   <input type="radio" value="cash" name="payment"><span>online payment</span> <br> <br>
                   <input type="radio" value="cash" name="payment"><span>EMI Payment</span> <br> <br>
                   <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span>
                </div>
                <button type="submit" class="btn btn-success">order Now</button>
            </form>
        </div>
    </div>
</div>
@endsection