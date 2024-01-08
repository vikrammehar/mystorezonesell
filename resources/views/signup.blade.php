@extends("master")
@section("content")
 <h1 class="text-center text-danger">Signup page</h1>
<div class="container">
<div class="row">
<div class="col-sm-4-col-sm-offset-4">
<form action="/signup" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check m-2">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>
</div>
</div>
</div>
    @endsection