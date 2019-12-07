@extends('layouts.app')
@section('content')
    <section class="bg-black">
        <div class="container-fluid">
            <div class="row">
                @include('blocks.header')
            </div>
        </div>
        <section class="bg-contacts">
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
                <div class="col-12 d-flex">
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
                    <div class="col-6 col-md-6 text-white">
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
                            <button type="button" class="btn btn-danger">Send</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center text-white pt-4">
            <p class="h1 ">FREQUENTLY ASKED QUESTIONS</p>
        </div>
        <div class="container">
            <div class="row text-white">
                <button class="accordion">What paperwork do I need to have when submitting a claim?</button>
                <div class="panel">
                    <p>You will need to keep your original invoice from Tire Rack with your Tire Road Hazard Protection Certificate.</p>
                    <p> Your Protection ID Numbers are shown on your invoice and will be required when you submit a claim.</p>
                </div>
                <button class="accordion">What vehicles are not eligible for Tire Road Hazard Protection?</button>
                <div class="panel">
                    <p>The following vehicles are not eligible for Tire Road Hazard Protection: </p>
                    <ul>
                        <li>Any police or emergency service vehicle</li>
                        <li>Any vehicle used for hire, commercial towing, construction or postal service</li>
                        <li>Any vehicle used for farm, ranch, agriculture or off-road use</li>
                    </ul>
                    <p>Additional exclusions and limitations are described in the Protection Certificate.</p>
                </div>
                <button class="accordion">What tire types are not eligible for Tire Road Hazard Protection?</button>
                <div class="panel">
                    <p>The following tires are not eligible for Tire Road Hazard Protection:</p>
                        <ul>
                            <li>Competition tires</li>
                            <li>LT metric-sized tires</li>
                            <li>LT flotation-sized tires</li>
                            <li>Trailer tires</li>
                        </ul>
                       <p>Additional exclusions and limitations are described in the Protection Certificate.</p>
                </div>
                <button class="accordion">How do I submit a claim?</button>
                <div class="panel">
                    <p>When an eligible tire is damaged, please follow the steps outlined via the link below.</p>
                </div>
                <button class="accordion">Is Tire Road Hazard Protection valid outside the U.S.?</button>
                <div class="panel">
                    <p>Protection is only available to customers living in the 50 United States.</p>
                    <p>U.S. territories, APO/FPO, Canada and Mexico are excluded.</p>
                    <p>Additional exclusions and limitations are described in the Protection Certificate.</p>
                </div>
            </div>
        </div>
        @include('blocks.footer')
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
