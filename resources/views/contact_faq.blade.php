@extends('layouts.app')
@section('content')
    <section class="bg-black pt-5">
        <section class="bg-contacts pt-5">
            <div class="container h-100">
                <div class="row align-items-end justify-content-center justify-content-md-start h-100">
                    <div class="h1 text-for-contacts text-white text-center">
                        Contacts
                    </div>
                </div>
            </div>
        </section>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-4 mb-md-0 ">
                    <h2 style="color: #FD595A">CONTACT DETAILS</h2>
                    <ul class="" style="list-style: none;padding-left: 0px;">
                        <li><a href="tel:(949) 954-7575" class="text-white">Phone: (949) 954-7575</a></li>
                        <li><a href="" class="text-white footer_text">E-mail: info@emmotires.com</a>​</li>
                        <li><a href="" class="text-white footer_text">Address: 2892 Kelvin Ave, IRVINE, CA,
                                92614</a></li>
                        <li class="text-white footer_text">Opening hours:</li>
                        <li class="text-white footer_text">Monday — Thursday 8:00 — 20:00</li>
                        <li class="text-white footer_text">Friday — Sunday 8:00 — 20:00</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 text-white">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                   placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">E-mail</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                   placeholder="Your email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn btn-danger text-center">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center text-white pt-4">
            <p class="h1 ">FREQUENTLY ASKED QUESTIONS</p>
        </div>
        <div class="container">
            <div class="row text-white">
                <button class="accordion">Does Tire Have Any Repairs?
                </button>
                <div class="panel">
                    <p>No, all used tires at Emmo Tires are well inspected and there is no any repairs. They are
                        inspected at least twice, once prior to listing for sale and once again prior to shipping out to
                        a buyer.</p>
                </div>
                <button class="accordion">Can Shipping Charges Be Reduced Or Discounted?</button>
                <div class="panel">
                    <p>Shipping is FREE to all cities of California . </p>
                </div>
                <button class="accordion">Do You Sell Rims/Wheels?</button>
                <div class="panel">
                    <p>No. We focused on used tires only.</p>
                </div>
                <button class="accordion">Do you sell Tires For All Types Of Vehicles?
                </button>
                <div class="panel">
                    <p>Yes, we sell used tires for all types of vehicle. </p>
                </div>
                <button class="accordion">How do i make a request for used tires?</button>
                <div class="panel">
                    <p>Please contact us directly by mail, or telephone. </p>
                </div>
                <button class="accordion">What are the terms of payment?</button>
                <div class="panel">
                    <p>We have been working with our customers on the basis of trust. The payment would be done after
                        the delivery.No deposit required.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
@endpush
