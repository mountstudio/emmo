<div class="row justify-content-between ">
    <div class="col-auto m-0">
        <a href="">
            <img src="{{asset('img/logo.png')}}" class="img-header pt-2 pt-md-2" alt="logo">
        </a>
    </div>
    <div class="col-auto col-md-4 m-0">
        <ul class="nav justify-content-end lighten-4">
            <li class="nav-item">
                <a href="#" class="search-sprite waves-effect waves-light mt-3"></a>
            </li>
            <li class="nav-item">
                <a href=""
                   class="user-sprite my-3 waves-effect waves-light mx-3 mx-md-5"></a>
            </li>
            <li class="nav-item">
                <a href="#menu2"
                   class="hamburger-sprite mt-3 waves-effect waves-light" style="padding-top: 25px"></a>
            </li>
        </ul>
    </div>
</div>
<nav id="menu2" class="btn-submit-your-application">
    <ul>
        <li><a href="{{ route('homepage') }}">Главная</a></li>
            <li><a href="{{ route('profile') }}">Добавить объявления</a></li>
        @if(auth()->check() && auth()->user()->role_id == 5)
            <li><a href="{{ route('profile.announce.create') }}">Разместить заказ</a></li>
        @endif
        <li class="btn-submit-your-application"><a href="#modalContactForm" data-toggle="modal" data-target="#modalContactForm" >Задать вопрос</a></li>
        {{--        <li><a href="{{ route('customer_list') }}">Список заявок от заказчиков</a></li>--}}
        <li><span>Объявления</span>
            <ul>
                <li><a href="{{ route('production', ['type' => 'productions']) }}">Производственные цеха и фабрики</a></li>
                <li><a href="{{ route('production', ['type' => 'product']) }}">Товары</a></li>
                <li><a href="{{ route('production', ['type' => 'service']) }}">Услуги</a></li>
            </ul>
        </li>
        <li><span>О компании</span>
            <ul>
                <li><a href="{{ route('about') }}">О нас</a></li>
                <li><a href="{{ route('blog_index') }}">Блог</a></li>
                <li><a href="{{ route('contacts') }}">Контакты</a></li>
            </ul>
        </li>
        <li><span>Наши услуги</span>
            <ul>
                <li><a href="{{ route('consulting') }}">Консультация</a></li>
                <li><a href="{{ route('logistics') }}">Логистика</a></li>
                <li><a href="{{ route('quality') }}">Проверка качества</a></li>
            </ul>
        </li>
        <li><a href="#reviews">Отзывы</a></li>
        <li><a href="{{ route('contacts') }}">Контакты</a></li>
    </ul>
</nav>


<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>
@push("scripts")
    <script>

    </script>

@endpush


