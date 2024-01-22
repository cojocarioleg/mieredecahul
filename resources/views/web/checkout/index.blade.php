@extends('layouts.main')
@extends('layouts.head')
@extends('layouts.header')
@extends('layouts.header-top')
@extends('layouts.footer')
@section('title')
    {{ 'Checkout' }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/checkoutstyle.css') }}">
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('javascript/review.js') }}"></script>
@endsection

@section('content')
    <div id="content">
        @include('layouts.baner',['baner'=>'Checkout'])

        <section id="checkout">
            <div class="checkout-inner">
                <h3 class="checkout-title">@lang('checkout.checkout-title')</h3>
                <form action="{{ route('makeOrder') }}" method="POST">
                    @csrf
                    <div class="info-grid">
                        <div class="form-side">
                            <label for="sname">@lang('personalArea.prenume')</label><br>
                            <input type="text" id="sname" name="sname" value="{{ $user->sname }}" required >
                        </div>
                        <div class="form-side">
                            <label for="name">@lang('personalArea.name')</label><br>
                            <input type="text" id="name" name="name"  value="{{ $user->name }}" required>
                        </div>
                        <div class="form-side">
                            <label for="email">@lang('personalArea.email')</label><br>
                            <input type="text" id="email" name="email" value="{{$user->email}}" required>
                        </div>
                        <div class="form-side">
                            <label for="phone">@lang('personalArea.telefon')</label><br>
                            <input type="text" id="phone" name="phone" value="{{ $user->phone }}" required>
                        </div>
                        <div class="form-side">
                            <label for="street">@lang('personalArea.strada')</label><br>
                            <input type="text" id="street" name="street" value="{{ $user->street }}">
                        </div>
                        <div class="form-side">
                            <label for="city">@lang('personalArea.localitatea')</label><br>
                            <input type="text" id="city" name="city" value="{{ $user->city }}">
                        </div>
                    </div>
                    <div class="checkout-table">
                        <table>
                            <thead>
                                <tr>
                                    <td>@lang('personalArea.nume_produs')</td>
                                    <td>@lang('personalArea.pret')</td>
                                    <td>@lang('personalArea.cantitatea')</td>
                                    <td>@lang('personalArea.subtotal')</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $item )
                                <tr>
                                  <td> {{ $item->name }} </td>
                                    <td><span>{{ $item->price }}</span> lei</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>
                                      <span>{{ $item->price  * $item->quantity }}</span> lei
                                    </td>
                                </tr>
                              @endforeach


                            </tbody>
                        </table>
                    </div>
                    <p class="total-cost">
                        @lang('personalArea.total'): <b><span>{{ $sum }}</span> lei</b>
                    </p>
                    <div class="checkout-continue">
                        <p class="go-back">
                            <span>@lang('checkout.forget') </span>
                            <a href="{{route('shopingCart')}}">@lang('checkout.edit')</a>
                        </p>
                        <input type="submit" value="@lang('checkout.continua')">
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
