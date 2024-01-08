@extends("master")
@section("content")
<h3 class="text-center text-danger">My Order</h3>
<div class="container">
  <div class="col-sm-6"> 
<table class="table table-success table-striped">
  <tbody>
    <tr> 
      <th scope="row">1</th>
      <td>Price</td>
      <td>{{$total}} INR</td>
    </tr>
    <tr> 
      <th scope="row">2</th>                                                                                                                                                                                                                                        
      <td>GST & Tax</td>
      <td>98.00 INR</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Deliver Charges</td>
      <td>250.00 INR</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Total Amount</td>
      <td>{{$total+250+98}} INR</td>
    </tr>
  </tbody>
</table>
<form action="orderplace" method="POST"> 
  @csrf
<div class="form-group">
  <div class="form-group">
    <h5>Delivery address</h5>
  </div>
  <textarea class="form-control" name="address" rows="3" placeholder="Enter your Delivery address where you want to take product."></textarea>
</div>
<div class="form-group">
  
  <label for="payment">Payment Options</label>
  <p> <input type="radio" name="payment" value="online"> <span>Online payment</span> </p>
  <p> <input type="radio" name="payment" value="EMI"> <span>EMI payment</span> </p>
</div>
<button type="submit" class="btn btn-danger btn-default"><a href="/payment/{{$total}}" class="paynow">Pay now</a></button>
<div class="form-group my-4"> 
<p> <input type="checkbox" name="payment on delevery" value="Cash On Delevery"> <span>Cash On Delevery</span> </p>
<button type="submit" class="btn btn-danger btn-default"><a href="/myorder" class="paynow orderplace">Order place</a></button>
</div>
</form>
</div> 
</div>
    @endsection