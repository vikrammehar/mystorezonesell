@extends("master")
@section("content")
<h3 class="text-center text-danger text-small">Home page</h3>
<div class="sliderpanel"> 
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  @foreach($products as $item)
    <div class="carousel-item {{$item['id']==1? 'active':''}}"  data-bs-interval="9000">
      <img src="{{$item['gallery']}}" class="pinker" alt="product" >
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-warning">{{$item['name']}}</h5>
        <h4 class="text-warning">{{$item['price']}}</h4>
        <p class="text-warning">{{$item['description']}}</p>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<h1 class="bg-dark text-warning shopitem">Shop Items</h1>
<main>
    <div class="flex1">
      @foreach($products as $item)
    <div class="pink one">
        <img class="img2" src="{{$item['gallery']}}"  alt="product items">
        <h2><a href="detail/{{$item['id']}}">{{$item['name']}}</a></h2>
        <h3><mark class="hilight"> {{$item['discount']}} </mark></h3>
        <h4 class="add">{{$item['price']}}</h4>
    </div>
    @endforeach
  </div>
 </main> 
@endsection
   
