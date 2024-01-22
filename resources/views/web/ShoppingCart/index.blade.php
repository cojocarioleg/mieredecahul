@extends('layouts.main')
@extends('layouts.head')
@extends('layouts.header')
@extends('layouts.header-top')
@extends('layouts.footer')
@section('title')
    @lang('Shopping_cart.title')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/checkoutstyle.css') }}">
@endsection

@section('content')
    <div id="content">
        @include('layouts.succes')
        <section id="shopping-cart">
            <div class="shopping-cart-inner">
                <h2 class="section-header">
                    @lang('Shopping_cart.title')
                </h2>

                <div class="shopping-cart-table">
                    <table>

                        <thead>

                            <tr>
                                <td class="product-photo">
                                    @lang('Shopping_cart.image')
                                </td>
                                <td>@lang('Shopping_cart.name')</td>
                                <td>@lang('Shopping_cart.price')</td>
                                <td>@lang('Shopping_cart.qty')</td>
                                <td>@lang('Shopping_cart.subtotal')</td>
                                <td>@lang('Shopping_cart.delete')</td>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($cart as $item)
                                <tr>
                                    <td class="product-photo">
                                        <img src="{{ Voyager::image($item->attributes->image) }}" alt="">
                                    </td>
                                    <td> {{ $item->name }}
                                        ({{ 'category' }})
                                    </td>
                                    <td>
                                        <span>{{ $item->price }}</span> lei
                                    </td>
                                    <td>
                                        <form action="{{ route('minusToBasket', ['id' => $item->id]) }}" method="post">
                                            @csrf
                                            <button class="quantity">-</button>
                                        </form>
                                        <span class="quantity-number">
                                            {{ $item->quantity }}
                                        </span>
                                        <form action="{{ route('addToBasket', ['id' => $item->id]) }}" method="post">
                                            @csrf
                                            <button type="submit" class="quantity">+</button>
                                        </form>
                                    </td>
                                    <td>
                                        <span>{{ $item->price * $item->quantity }}</span> lei
                                    </td>
                                    <td>
                                        <form action="{{ route('removeToBasket', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="remove" onclick="return confirm('confim delete')">
                                                <i class='fa fa-trash'></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="shopping-cart-bottom">
                    <div class="left">
                        <button>
                            <a href="{{ route('products') }}"> @lang('Shopping_cart.continue')</a>
                        </button>
                    </div>
                    <div class="right">
                        <p class="cost">
                            @lang('Shopping_cart.total'): <span>{{ $sum }}</span> lei
                        </p>
                        <form action="{{route('checkout')}}" method="GET">
                            <button type="submit">
                                @lang('Shopping_cart.cont')
                            </button>
                        </form>
                    </div>
                </div>


            </div>
        </section>
    </div>
@endsection
