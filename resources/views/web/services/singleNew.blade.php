@extends('layouts.main')
@extends('layouts.head')
@extends('layouts.header')
@extends('layouts.header-top')
@extends('layouts.footer')
@section('title', __('news.title-home'))
@section('css')
    <link rel="stylesheet" href="{{ asset('css/servicestyle.css') }}">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('javascript/review.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
@endsection

@section('content')
    <div class="content-splitter">
        @include('web.services.main-section', ['new' => $new])
        <section id="sidebar-section">

            <!-- search button -->
            @include('web.services.search_button')

            <!-- Categories sidebar -->
            @include('layouts.sidebar_categories', ['categories' => $categories])

            <!-- last-products sidebar -->
            @include('layouts.latest-products-sidebar', ['last_products' => $last_products])

            <!-- last-news sidebar -->
            @include('layouts.last-news', ['last_news' => $last_news])

        </section>

    </div>
    @include('layouts.other-offers', ['last_news' => $services])

@endsection
