@extends("master")
@section("content")
Search page
<main>
    <h1 class="text-center bg-dark text-warning">Search item</h1>
    <div class="container">
        <div class="row my-4">
            @foreach($products as $item)
            <div class="col-sm-6">
            <img class="detailimg" src="{{$item['gallery']}}" alt="" srcset="">
    </div>
    <div class="col-sm-6"> 
        <h3 class="my-4 text-primary">{{$item['name']}}</h3>
        <h3 class="my-4 text-primary">{{$item['price']}}</h3>
        <h4 class="my-4 text-primary">{{$item['description']}}</h4>
        <h4 class="my-4 text-primary">{{$item['discount']}}</h4>
        <div class="mx-4">
            <button class="btn btn-success">Add to Cart</button>
            <a href="/ordernow" class="btn btn-danger mx-4">Buy Now</a>
        </div>
    </div> 
    <a href="detail/{{$item['id']}}">Detail</a>
    @endforeach
</div>
</div>
 </main> 
@endsection