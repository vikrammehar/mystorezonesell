<?php

use App\http\Controllers\Productcontroller;
 $total =0;
if(Session::has('user'))
{
   $total=Productcontroller::cartItem();
}

?>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Dishani online market</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorder">My Order</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/">Products</a></li>
            <li><a class="dropdown-item" href="/">Grocery</a>  </li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      <form action="/search" class="d-flex mx-4" role="search">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-2">
        <li class="nav-item">
          <a class="nav-link" href="/cartlist"><img src="3081986.png" class="cart" alt="" srcset="">({{$total}})</a>
        </li>
      </ul>
        @if(Session::has('user'))
        <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          {{Session::get('user')['name']}}
          </button>
          <ul class="dropdown-menu">
  <li><a class="dropdown-item" href="/logout">Logout</a></li>
  <li><hr class="dropdown-divider"></li>
  @else
  <li class="listsu"><a class="dropdown-item text-warning my-2" href="/signup">Sign up</a></li>
  <li class="listsu"><a class="dropdown-item text-warning  my-2" href="/login">Login</a></li>
  @endif
</ul>
</div>
     

    </div>
  </div>
</nav>