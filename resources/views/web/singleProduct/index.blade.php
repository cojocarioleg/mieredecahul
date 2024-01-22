@extends('layouts.main')
@extends('layouts.head')
@extends('layouts.header')
@extends('layouts.header-top')
@extends('layouts.footer')
@section('title')
    {{ $product->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/productstyle.css')}}">
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('javascript/product.js')}}"></script>

@endsection

@section('content')

<div id="content">
    @include('layouts.baner', ['baner' => $product->title])
    <section id="product-overview">
        <div class="product-overview-inner">
            @include('web.singleProduct.slider')
            @include('web.singleProduct.product-info')
        </div>
    </section>
    <section id="product-singele-about">
        <div class="prod-tabs">
            <input class="radio" id="one" name="group" type="radio" checked="">
            <input class="radio" id="two" name="group" type="radio">
            <input class="radio" id="three" name="group" type="radio">
            <input class="radio" id="four" name="group" type="radio">
            <div class="tabs">
                <label class="tab" id="one-tab" for="one">
                    @lang('product.descriere')
                </label>
                <label class="tab" id="two-tab" for="two">
                    @lang('product.recenzii')
                </label>
            </div>
            <div class="panels">
                @include('web.singleProduct.content')
                @include('web.singleProduct.review')
            </div>
        </div>
    </section>
@include('web.singleProduct.add-review')
</div>
@endsection
