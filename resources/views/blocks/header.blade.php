<nav class="navbar navbar-expand-md navbar-light shadow-none" >
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}"
                                                                class="img-fluid" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="color: white!important;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto text-center">
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-white" href="" title="ALL TIRES">All tires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-white" href="" title="bestsellers">Bestsellers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-white" href="" title="DELIVERY & INSTALLERS">Delivery & Installers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-white    " href="" title="Contacts">Contacts</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form class="form-inline md-form form-sm mt-0">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                               aria-label="Search">
                    </form>
                </li>
                <li class="nav-item text-center" style="width: 40%;background: linear-gradient(180deg, #FD595A 0%, #8C1314 100%);">
                    <a href="" class="" style="position:absolute;padding-top: 38px;padding-left: 4px;"><img src="img/0.png" alt="" class="img-fluid"></a>
                    <a href="" class=""><img src="img/basket.png" alt="" class="img-fluid"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>


@push('styles')

@endpush
@push("scripts")

@endpush

