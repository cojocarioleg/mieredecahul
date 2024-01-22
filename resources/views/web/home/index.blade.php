@extends('layouts.main')
@extends('layouts.head')
@extends('layouts.header')
@extends('layouts.header-top')
@extends('layouts.footer')
@section('css')
    <link rel="stylesheet" href="{{asset('css/landingstyle.css')}}">
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('javascript/product.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/timer.js')}}"></script>
@endsection

@section('content')
<div id="content">
  <section id="landing-banner">
    <!-- banner top -->
    @include('web.home.landing-banner-inner')
    @include('web.home.landing-banner-panel', ['benefits' => $benefits])
  </section>

    @include('web.home.production-process', ['productions' => $productions])


    @include('web.home.products', ['products' => $products])

    @include('web.home.services', ['services' => $services])

    @include('web.home.landing-offer', ['offer'=>$offer])

    @include('web.home.landing-reviews', ['reviews' => $reviews])

@include('web.home.landing-news', ['news' => $news])
</div>
@endsection
