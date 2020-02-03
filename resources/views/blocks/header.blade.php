<nav
    class="col-12 navbar navbar-expand-lg navbar-light shadow-none pt-0 pb-0 {{ \Illuminate\Support\Facades\Request::routeIs('welcome') ? 'bg-transparent' : 'bg-black' }}  fixed-top"
    id="header">
    <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('img/logo.png') }}"
                                                               class="img-fluid" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}" style="color: white!important;">
        <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-center col-12 col-lg-7 font-weight-bold">
            <li class="nav-item mr-2">
{{--                <a class="nav-link text-uppercase text-white" href="{{ route('brand.index') }}" title="ALL TIRES" style="font-size: 14px">All--}}
{{--                    tires</a>--}}
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link text-uppercase text-white" href="{{ route('bestsellers.index', ['city' => 'city']) }}" title="bestsellers" style="font-size: 14px">Bestsellers</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link text-uppercase text-white" href="{{ route('delivery_and_installation') }}"
                   title="DELIVERY & INSTALLERS" style="font-size: 14px">Delivery &
                    Installers</a>

            </li>
            <li class="nav-item mr-2">
                <a class="nav-link text-uppercase text-white" href="{{ route('contact_faq') }}" title="Contacts" style="font-size: 14px">Contacts</a>
            </li>
        </ul>
        <div class="pl-0">
            <ul class="navbar-nav">
                <li class="nav-item text-center pt-3 pb-4 px-3 font-weight-bold"
                    style="background: linear-gradient(180deg, #FD595A 0%, #8C1314 100%); position:relative;">
                    <a href="{{ route('cart.checkout') }}" class="cart cart-count text-white"
                       style="position:absolute;padding-top: 25px;font-size: 23px;left: 50%; transform: translateX(-50%);">0</a>
                    <a href="{{ route('cart.checkout') }}" class="cart "><img src="{{asset('img/basket.png')}}" alt=""
                                                                              class="img-fluid pb-3"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>


@push('styles')

@endpush
@push("scripts")
    @if(\Illuminate\Support\Facades\Request::routeIs('welcome'))
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
    @endif
@endpush

