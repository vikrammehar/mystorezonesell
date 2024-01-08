@extends("master")
@section("content")
<h3 class="text-center text-danger">My Order list</h3>

<div class="container my-4" >
<div class="row my-4" style="border: 2px solid purple;">
    @foreach($orders as $item)
    <div class="col-sm-6">
        <img class="detailimg" src="{{$item->gallery}}" alt="" srcset="">
    </div>
    <div class="col-sm-6"> 
        <h3 class="my-4 text-dark " style="border: 2px solid black;">{{$item->name}}</h3>
        <h3 class="my-4 text-dark" style="border: 2px solid black;">Price={{$item->price}}</h3>
        <h4 class="my-4 text-dark" style="border: 2px solid black;">Payment-status=>{{$item->payment_status}}</h4>
        <h4 class="my-4 text-dark" style="border: 2px solid black;">Payment-method=> {{$item->payment_method}}</h4>
        <h4 class="my-4 text-dark" style="border: 2px solid black;">Delivery address=>{{$item->address}}</h4>
        <div class="mx-4">
        </div>
    </div> 
    <a href="/">GO BACK</a>
    @endforeach
</div>
</div>
    @endsection