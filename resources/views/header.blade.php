<?php

use App\Http\Controllers\ProductController;
use Illuminate\Contracts\Session\Session;

$total = 0;
// check if session has user
if (Session()->has('user')) {
  $total = ProductController::cartItem();
}


?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorders">orders</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <li><a href="/cartlist">cart({{$total}})</a></li>
        @if(Session()->has('user'))
        <ul class="nav navbar-nav">
          
          <!-- to now which user has login -->
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{Session()->get('user')['name']}}<span class=""></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/register">register</a></li>
          @endif
        </ul>
      </form>
    </div>
  </div>
</nav>