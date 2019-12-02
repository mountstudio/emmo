@extends('layouts.app')

@section('title')

@endsection
@section('content')
   <div class="bg-black">
       <section class="bg-black" style="background: url({{ asset('img/bg_emmo.png') }}) no-repeat; background-size: cover;height: 1000px">
           @include('blocks.header')
           @include('blocks.middle')

       </section>
       <section class="bg-black" style="background: url({{ asset('img/bg.png') }}) no-repeat; background-size: cover;height: 2000px;padding: 0;margin: 0">
           @include('blocks.our_advantages')
       </section>
       <section class="bg-black" style="background: url({{ asset('img/bg_footer_5.png') }}) no-repeat; background-size: cover;height: 1700px;">
           @include('blocks.articles')
           @include('blocks.footer')
       </section>
   </div>
@endsection
