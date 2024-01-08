@extends("master")
@section("content")
<h3 class="text-center text-danger">Product details </h3>
<div class="container">
<div class="row my-4">
    <div class="col-sm-6"> 
        <img class="detailimg" src="{{$products['gallery']}}" alt="" srcset="">
    </div>
    <div class="col-sm-6"> 
        <h3 class="my-4 text-primary" style="border:2px solid black;">{{$products['name']}}</h3>
        <h3 class="my-4 text-primary" style="border:2px solid black;">{{$products['price']}}</h3>
        <h4 class="my-4 text-primary" style="border:2px solid black;">{{$products['description']}}</h4>
        <h4 class="my-4 text-primary" style="border:2px solid black;">{{$products['discount']}}</h4>
        <div class="mx-4">
           <form action="/add_to_cart" method="POST">
            <input type="hidden" name="product_id" value="{{$products['id']}}">
           @csrf
            <button class="btn btn-success my-4">Add to Cart</button>
           </form>
           <a href="/ordernow" class="btn btn-danger mx-4">Buy Now</a>
        </div>
    </div> 
    <a href="/">GO BACK</a>
</div>
</div>
    @endsection
