@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 py-5">
                    <p class="h5 text-white">Choose your preferred payment method</p>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="defaultUnchecked"
                               name="defaultExampleRadios">
                        <label class="custom-control-label text-white" for="defaultUnchecked">checkout with VISA /
                            MASTERCARD</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios"
                               checked>
                        <label class="custom-control-label text-white" for="defaultChecked">checkout with Paypal</label>
                    </div>
                </div>
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
                            <label class="text-white">Street</label>
                            <input type="text" id="" class="form-control mb-4 bg_input"
                                   placeholder="Street">
                            <label class="text-white">Appartment</label>
                            <input type="text" id="" class="form-control mb-4 bg_input"
                                   placeholder="Appartment">
                            <label class="text-white">City</label>
                            <input type="text" id="" class="form-control mb-4 bg_input"
                                   placeholder="City">
                            <label class="text-white">Province</label>
                            <select class="browser-default custom-select mb-4 arrow-for-select">
                                <option value="1" selected>Idaho</option>
                                <option value="2">Iowa</option>
                                <option value="3">Alabama</option>
                                <option value="4">Alaska</option>
                                <option value="5">Arizona</option>
                                <option value="6">Arkansas</option>
                            </select>
                            <label class="text-white">Phone number</label>
                            <input type="phone" id="" class="form-control mb-4 bg_input"
                                   placeholder="Phone number">
                            <label class="text-white">Email</label>
                            <input type="email" id="" class="form-control mb-4 bg_input"
                                   placeholder="E-mail">
                            <button class="btn btn-info btn-block" type="submit">Sign in</button>
                        </form>
                    </div>
                    <div class="col-12 col-md-6">
                        <form class="text-left text-white border border-light p-5 form-bg" action="#!">
                            <p class="h4 mb-4 text-white">Please fill out your shipping address</p>
                            <label class="text-white">Card Number</label>
                            <input type="text" id="" class="form-control mb-4 bg_input"
                                   placeholder="Card Number">
                            <label class="text-white">Expiration date</label>
                            <div class="md-form">
                                <input placeholder="Selected date" type="text" id="date-picker"
                                       class="form-control datepicker">
                                <label for="date-picker">Try me...</label>
                            </div>
                            <label class="text-white">CCV</label>
                            <input type="number" id="" class="form-control mb-4 bg_input"
                                   placeholder="CCV">
                            <label class="text-white text-center">Note: the credit card owner's address must match the
                                shipping address.</label>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 pt-5 d-flex">
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
                    <div class="col-12 col-md-6 pt-5">
                        <form class="text-left text-white border border-light p-5 form-bg" action="#!">
                            <p class="h4 mb-4 text-white">ORDER TOTAL</p>
                            <div>
                                <label class="text-white">Card Number</label>
                            </div>
                            <div>
                                <label class="text-white">Expiration date</label>
                            </div>
                            <div class="div">
                                <label class="text-white">CCV</label>
                            </div>
                        </form>
                    </div>
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
