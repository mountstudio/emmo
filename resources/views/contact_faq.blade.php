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
                <button class="accordion">How can I tell if my tires are directional and properly mounted/rotated?
                </button>
                <div class="panel">
                    <p>Directional tires will have a rotation arrow branded on the tire's sidewall. The arrow indicates
                        the direction in which the tire should turn.</p>
                    <p> Unless they are dismounted and remounted on their wheels to accommodate use on the other side of
                        the vehicle, directional tires are to be used on one side of the vehicle and are intended to be
                        rotated from the front axle to the rear axle. If different tire sizes are used on the front vs.
                        rear axle, the tires become location-specific and prohibit tire rotation unless remounted.</p>
                </div>
                <button class="accordion">How do you know what tire fits my vehicle?</button>
                <div class="panel">
                    <p>Original Equipment tire sizes shown in search results for particular vehicles are determined
                        based on the best information currently available to us from vehicle manufacturers and from
                        manual inspection of new vehicles as they are released. Many vehicles have optional trim
                        levels/packages that include different tire sizes. This "Additional Model Info" is listed for
                        you to choose from in search results as well. </p>
                    <p>Since variations based on options or vehicle manufacturer changes may determine the Original
                        Equipment tire size on your vehicle, always verify the size you are purchasing matches the tire
                        size for your vehicle (usually found in the door jamb, glove box lid or gas cap door) or in the
                        Owner's Manual.</p>
                    <p>If you are unsure what size is installed on your vehicle, please confirm the size as listed on
                        the tire sidewall before placing your order.</p>
                    <p>The Optional Tire Sizes featuring different rim diameters we list for many vehicles are based on
                        over 30 years of experience we have with plus size wheel and tire combinations. However, it is
                        important to note that these optional tire sizes are based on vehicle specific wheel
                        sizes/offsets offered by Tire Rack.</p>
                </div>
                <button class="accordion">What does speed rating mean and what is correct for my vehicle?</button>
                <div class="panel">
                    <p>In Germany, some highways do not have speed limits and high speed driving is permitted. Speed
                        ratings were established to match the speed capability of tires with the top speed capability of
                        the vehicles to which they are applied. For example, an R-speed rated tire is designed for
                        maximum speeds of 106 mph. Detailed information can be found in our tech article: How to Read
                        Speed Rating, Load Index & Service Descriptions</p>
                    <p>When searching by vehicle, you can select the rating(s) based on your vehicle and intended use.
                        When you choose "recommended" you will see the speed rating(s) appropriate for your vehicle.
                        Numbers in parentheses indicate quantity of tires available and do not include winter or
                        competition tire counts that are below your vehicle's recommended speed rating.</p>
                </div>
                <button class="accordion">Can I mount non-run-flat tires on my stock wheels even if my vehicle came with
                    run-flat tires as Original Equipment?
                </button>
                <div class="panel">
                    <p>Yes. But keep in mind that many times when a vehicle is equipped with run-flat tires from the
                        factory, a spare tire is not included. Some drivers opt to carry a full-size spare or a space
                        saver spare tire. Another option is to carry a product like the Continental ContiComfortKit for
                        temporary mobility in the event a tire is punctured.</p>
                    <p>Also note that when you first change from a run-flat to a non-run-flat tire, the installer will
                        need run-flat capable equipment to remove the original tire. Many of our Recommended Installers
                        have this equipment.</p>
                </div>
                <button class="accordion">How is the tire warranty rating determined?</button>
                <div class="panel">
                    <p>Tire Rack's Tire Warranty Rating is an overall rating given to tire warranties after subjectively
                        evaluating their value for the consumer. Warranties are rated on a scale of 0-5 with 5 being the
                        highest. This rating combines all of the aspects of each tire's warranty where applicable,
                        including: mileage/treadlife, materials and workmanship, balance and uniformity, replacement
                        tire cost, warranty duration and any special manufacturer's warranties that apply. See official
                        manufacturers' warranty brochures for specific details.</p>
                </div>
                <button class="accordion">What is the correct load rating for my vehicle?</button>
                <div class="panel">
                    <p>The load range (or load index) on a tire's sidewall helps identify its strength and ability to
                        contain air pressure. Load ranges are identified in ascending alphabetical order for light
                        truck/SUV tires (the further along the letter is in the alphabet, the stronger the tire and the
                        greater amount of air pressure it can withstand and load it can carry). Read more in our tech
                        article: How to Read Speed Rating, Load Index & Service Descriptions</p>
                    <p>When searching by vehicle, load ranges are shown in ascending alphabetical order. When you choose
                        "recommended" you will see the load range(s) appropriate for your vehicle.</p>
                </div>
                <button class="accordion">When are winter / snow tires no longer appropriate for the next season?
                </button>
                <div class="panel">
                    <p>Check your tires' tread depths. When a winter / snow tire has worn to about 6/32", it's ability
                        to provide beneficial snow traction will start to diminish. While still legal at 2/32", a winter
                        / snow tire has worn well past the depth where it provides beneficial snow traction. Also read:
                        Tread Depth – Why Too Little is Never Enough</p>
                </div>
                <button class="accordion">Why can't I use only two winter tires?</button>
                <div class="panel">
                    <p>If you were to put winter tires on only the front or rear of your vehicle, you would create a
                        vehicle with a split personality.</p>
                    <p>Leading automobile manufacturers such as BMW, Mercedes-Benz, Honda, Nissan and Toyota recommend
                        in their owner's manuals that you install four winter tires for winter driving. By installing
                        four winter tires, you maintain the most balanced and controlled handling possible in all winter
                        driving conditions. It is imperative to keep the same level of traction at all four corners of
                        the car; otherwise, the full benefits of ABS or traction control systems will be lost.</p>
                    <p>We tested mixed vs. matched tires on vehicles in the winter. Here are the results.</p>
                </div>
                <button class="accordion">Why can't I use run-flat tires without a Tire Pressure Monitoring System
                    (TPMS)?
                </button>
                <div class="panel">
                    <p>Because run-flat tires are so good at masking the traditional loss-of-air symptoms that accompany
                        a flat tire, they require a tire pressure monitoring system to alert the driver that they have
                        lost air pressure. Without such a system, the driver (even an experienced driver) may not notice
                        underinflation and may inadvertently cause additional tire damage by failing to inflate or
                        repair the tire at the first opportunity.</p>
                </div>
                <button class="accordion">What is the proper air pressure for my tires?</button>
                <div class="panel">
                    <p>Proper tire air pressure is determined by the vehicle manufacturers and is set to best fine-tune
                        a tire's capabilities to their specific vehicle make and model. The vehicle manufacturer's
                        pressure recommendation can be found on the vehicle's tire information placard label, as well as
                        in the vehicle owner's manual.</p>
                </div>
                <button class="accordion">Where do I find the tire identification numbers? What do they mean?</button>
                <div class="panel">
                    <p>Refer to this drawing to see the various markings on a tire's sidewall. The tire identification
                        number is shown middle left in the illustration and is essentially the tire's serial number. It
                        is required when registering tires with manufacturers and is used for safety standard
                        certification and in case of a recall. Read more in our tech article: Tire Identification
                        Numbers</p>
                </div>
                <button class="accordion">I don't know my tire size. What should I do?</button>
                <div class="panel">
                    <p>Only tires specifically for the vehicle selected will be shown in search results. From there you
                        can select an Original Equipment replacement or a performance upgrade per the results shown. You
                        can refine your search by selecting certain criteria from various categories. For example, if
                        you prefer a certain brand or require a specific performance category, only those search results
                        will be shown. From there you can read complete product descriptions, test results, tire
                        reviews, tire specs and warranty information.</p>
                    <p>Select your vehicle, answer a few questions about your driving style and the conditions in which
                        you drive. We'll lead you to tire performance categories that are right for you.</p>
                </div>
                <button class="accordion">How much does it cost to ship internationally? What information does a
                    customer need to provide to get an international freight quote?
                </button>
                <div class="panel">
                    <p>In order for us to provide a shipping quote, contact a Tire Rack sales specialist by phone or
                        email and provide the following information:</p>
                    <ul>
                        <li>Vehicle year/make/model</li>
                        <li>Full billing address</li>
                        <li>Full shipping address</li>
                        <li>Billing telephone number</li>
                        <li>Your contact information</li>
                        <li>Complete list of products you'd like to purchase</li>
                    </ul>
                    <p>Based on this information we will select the best shipping method with the lowest cost. Exact
                        shipping cost varies based on the items mentioned above.</p>
                    <p>Payment via wire transfer is preferred.</p>
                </div>
                <button class="accordion">When will my order be delivered?</button>
                <div class="panel">
                    <p>Most of our customers are within one to two business days of our distribution centers for timely
                        delivery of their purchases.</p>
                    <p>Delivery times can be seen once you enter your ZIP/Postal Code and view product search results or
                        product pages on the site.</p>
                </div>
                <button class="accordion">Does Tire Rack offer free shipping?</button>
                <div class="panel">
                    <p>Yes! Standard ground shipping is free on all orders of $50 or more (not including taxes).
                        Exclusions apply. See complete details</p>
                </div>
                <button class="accordion">I live near one of your distribution centers. Can I pick up my order there?
                </button>
                <div class="panel">
                    <p>Yes! You can pick up your order at one of our ten distribution centers located across the U.S.
                        and receive an order pick-up discount on tire and wheel orders over $50.</p>
                    <ul>
                        <li>Denver, CO</li>
                        <li>Windsor, CT</li>
                        <li>New Castle, DE</li>
                        <li>Atlanta, GA</li>
                        <li>Midway, GA</li>
                        <li>South Bend, IN</li>
                        <li>Shreveport, LA</li>
                        <li>Minneapolis, MN</li>
                        <li>Sparks, NV</li>
                        <li>Seattle, WA</li>
                    </ul>
                    <p>Once we know your ZIP Code in the cart, we'll check your proximity to one of these locations and
                        let you know if order pick-up is available for the selected products. Most items (other than
                        Tire & Wheel Packages, tires that include studding, heat cycling or shaving and any items not
                        currently in stock) are ready within an hour and we'll let you know via email when your order
                        can be picked up. In-stock Tire & Wheel Packages and tires that include studding, heat cycling
                        or shaving, may take up to six hours before they are ready for pick-up and we'll contact you via
                        email when these orders can be picked up, as well.</p>
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
