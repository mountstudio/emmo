@extends('layouts.app')
@section('content')
    <section class="" style="padding-top: 150px">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <form class="text-left text-white border border-light p-5 form-bg" action="#!"
                          style="border-radius: 10px;background: rgba(34, 34, 34, 0.64);border: 1px solid #929292;">
                        <p class="h4 mb-4 text-white">Please fill out your shipping address</p>
                        <label class="text-white">First name</label>
                        <input type="text" id="" class="form-control mb-4 bg_input"
                               placeholder="First name">
                        <label class="text-white">Last name</label>
                        <input type="text" id="" class="form-control mb-4 bg_input"
                               placeholder="Last name">
                        <label class="text-white">Phone number</label>
                        <input type="phone" id="" class="form-control mb-4 bg_input"
                               placeholder="Phone number">
                        <label class="text-white">Email</label>
                        <input type="email" id="" class="form-control mb-4 bg_input"
                               placeholder="E-mail">
                        <button class="btn choose_btn " type="submit">Send</button>
                    </form>
                </div>
            </div>
               <div class="row">
                   <div class="col-12 col-md-4 pt-5 d-flex">
                       <div>
                           <img src="{{ asset('img/tire_registration.png') }}" alt="">
                       </div>
                       <div>
                           <p class="text-white">BRIDGESTONE</p>
                           <p class="text-white h5">TURANZA QUIETTRACK</p>
                           <p class="text-red">225/45R17</p>
                           <p class="text-white">Style: Blackwall</p>
                           <p class="text-white">Serv. Desc: 91V</p>
                       </div>
                   </div>
                   <div class="col-12 col-md-4 pt-5">
                       <form class="text-left text-white border border-light p-5 form-bg" action="#!">

                           <div class="d-flex justify-content-between">
                               <p class="">Card number</p>
                               <p class="">85.10$</p>
                           </div>
                           <div class="d-flex justify-content-between">
                               <p class="">Quantity</p>
                               <p class="">4</p>
                           </div>
                           <div class="d-flex justify-content-between">
                               <p class="">Total</p>
                               <p class="">340.40$</p>
                           </div>
                       </form>
                   </div>
                   <div class="col-12 col-md-4 pt-5">
                       <form class="text-left text-white border border-light p-5 form-bg" action="#!">
                           <p class="h4 mb-4 text-white">ORDER TOTAL:</p>
                           <div class="d-flex justify-content-between">
                               <p class="">Subtotal</p>
                               <p class="">340.40$</p>
                           </div>
                           <div class="d-flex justify-content-between">
                               <p>Shipping</p>
                               <p>free</p>
                           </div>
                           <div class="d-flex justify-content-between">
                               <p>Total</p>
                               <p>384.65$</p>
                           </div>
                       </form>
                   </div>
               </div>
            </div>
    </section>
@endsection
@push('scripts')
    <script>
        $('.datepicker').pickadate();
    </script>
@endpush
