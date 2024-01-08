@extends("master")
@section("content")
<div id="app">
         <main class="py-4">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-3 col-md-offset-6">
                     @if($message = Session::get('error'))
                     <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <strong>Error!</strong> {{ $message }}
                     </div>
                     @endif
                     @if($message = Session::get('success'))
                     <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <strong>Success!</strong> {{ $message }}
                     </div>
                     @endif
                     <div class="card card-default">
                        <div class="card-header">
                           Razorpay Payment Gateway
                        </div>
                         
                        <div class="card-body text-center">
                           <form action="/payment" method="POST" >
                              @csrf
                              <script src="https://checkout.razorpay.com/v1/checkout.js"
                                 data-key="PLEASE_PASTE_YOUR_PRIVATE_KEY_HERE"
                                 data-amount="50001" 
                                 data-currency="INR"                          
                                 data-buttontext="Pay {{$total+250+98}} INR"
                                 data-name="My store sell"
                                
                                 data-description="Rozerpay"
                                 data-image="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.fiverr.com%2Flogo-maker%2Fideas%2Ftag%2Fclan&psig=AOvVaw2zXbWQwut5JmAh45WqQfjo&ust=1704280151447000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCPiht8bIvoMDFQAAAAAdAAAAABAD"
                                 data-prefill.name="name"
                                 data-prefill.email="email"
                                 data-theme.color="#F37254"></script>
                                 
                           </form>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
    @endsection
