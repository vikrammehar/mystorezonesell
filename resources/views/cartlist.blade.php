@extends("master")
@section("content")
<h3 class="text-center text-danger">My Cart zone</h3>

<div class="container my-4" >
<a href="/ordernow" class="btn btn-danger mx-4">Order Now</a>
<div class="row my-4" style="border: 2px solid purple;">
    @foreach($products as $item)
    <div class="col-sm-6">
        <img class="detailimg" src="{{$item->gallery}}" alt="" srcset="">
    </div>
    <div class="col-sm-6"> 
        <h3 class="my-4 text-primary " style="border: 2px solid black;">{{$item->name}}</h3>
        <h3 class="my-4 text-primary" style="border: 2px solid black;">Price={{$item->price}}</h3>
        <h4 class="my-4 text-primary" style="border: 2px solid black;">{{$item->description}}</h4>
        <h4 class="my-4 text-primary" style="border: 2px solid black;"> Discount=>{{$item->discount}}</h4>
        <div class="mx-4">
            <a href="/removecart/{{$item->cart_id}}" class="btn btn-primary mx-2">Remove to Cart</a>
            <a href="/ordernow" class="btn btn-danger mx-4">Buy Now</a>
        </div>
    </div> 
    <a href="/">GO BACK</a>
    @endforeach
</div>
<a href="/ordernow" class="btn btn-danger mx-4">Order Now</a>
</div>
    @endsection
