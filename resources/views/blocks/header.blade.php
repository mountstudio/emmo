<nav class="col-12 navbar navbar-expand-lg navbar-light shadow-none pt-0 bg-transparent fixed-top" id="header">
    <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('img/logo.png') }}"
                                                            class="img-fluid" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}" style="color: white!important;">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto text-center col-12 col-md-7">
            <li class="nav-item">
                <a class="nav-link text-uppercase text-white" href="{{ route('brand.index') }}" title="ALL TIRES">All tires</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase text-white" href="" title="bestsellers">Bestsellers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase text-white" href="" title="DELIVERY & INSTALLERS">Delivery &
                    Installers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase text-white" href="" title="Contacts">Contacts</a>
            </li>
        </ul>

       <div class="col-12 col-md-3  pr-0">
           <form class=" form-inline md-form form-sm active-cyan-2 my-1 ">
               <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                      aria-label="Search">
               <i class="fas fa-search text-white active" aria-hidden="true"
                  style="color: #fff !important">

               </i>
           </form>
       </div>
           <div class="col-12 col-md-2 pl-0">
               <!-- Right Side Of Navbar -->
               <ul class="navbar-nav ml-5 col-12 col-md-5">
                   <li class="nav-item text-center pt-4 pb-5 px-3"
                       style="background: linear-gradient(180deg, #FD595A 0%, #8C1314 100%);">
                       <a href="{{ route('cart.checkout') }}" class="cart cart-count text-white" style="position:absolute;padding-top: 38px;padding-left: 4px;"><img
                               src="{{asset('img/0.png')}}" alt="" class="img-fluid"></a>
                       <a href="{{ route('cart.checkout') }}" class="cart "><img src="{{asset('img/basket.png')}}" alt="" class="img-fluid"></a>
                   </li>
               </ul>
           </div>


    </div>
</nav>


@push('styles')

@endpush
@push("scripts")
    <script>
        var cbpAnimatedHeader = (function () {

            var docElem = document.documentElement,
                header = document.getElementById('header'),
                didScroll = false,
                changeHeaderOn = 20;

            function init() {
                window.addEventListener('scroll', function (event) {
                    if (!didScroll) {
                        didScroll = true;
                        setTimeout(scrollPage, 250);
                    }
                }, false);
            }

            function scrollPage() {
                var sy = scrollY();
                if (sy >= changeHeaderOn) {
                    header.classList.add('bg-black');
                    console.log('add')
                } else {
                    header.classList.remove('bg-black');
                    console.log('remove')
                }
                didScroll = false;
            }

            function scrollY() {
                return window.pageYOffset || docElem.scrollTop;
            }

            init();

        })();
    </script>
@endpush

