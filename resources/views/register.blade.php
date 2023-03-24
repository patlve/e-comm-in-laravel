@extends('master')
@section("content")
<div class="container custom-login" >
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST">
                 @csrf
                 <div class="mb-3">
                   
                   <label for="exampleInputEmail1"  class="form-label">user name</label>
                   <input type="text" class="form-control"name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
                   <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
               </div>
                <div class="mb-3">
                   
                    <label for="exampleInputEmail1"  class="form-label">Email address</label>
                    <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="User Password">
                </div>

                <button type="submit" class="btn btn-primary">register</button>
            </form>
        </div>
    </div>
</div>

@endsection