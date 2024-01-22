@section('header')
    <div id="myHeader" class="header-bottom">
        <header>
            <div class="header-left-side">
                <div class="header-logo">
                    <a href=" {{ route('home') }} ">
                        <img src="{{ Voyager::image(setting('site.logo')) }}" alt="">
                    </a>
                </div>
                <a href="javascript:void(0);" class="expand-menu-icon" onclick="myNav()">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="profile-buttons responsive-profile-butons">
                    <button class="user-button">
                        <i class='fa fa-user'></i>
                    </button>
                    <button class="log-out">
                        <i class='fas fa-sign-out-alt'></i>
                    </button>
                    <button onclick="cartDrpdn()" class="shoping-cart-button">
                        <p class="cart-item-number">4</p>
                        <i class='fa-solid fa-cart-shopping'></i>
                    </button>
                </div>
            </div>

            <div id="myTopnav" class="header-right-side">
                <nav>
                    <div class="dropdown-link">
                        <p>
                            @lang('menu.despre')
                        </p>
                        <div class="dropdown-list">
                            <a href="vision.html">
                                @lang('menu.viziune')
                            </a>
                            <a href="history.html">
                                @lang('menu.istoric')
                            </a>
                            <a href="{{route('team')}}">
                                @lang('menu.echipa')
                            </a>
                        </div>
                    </div>
                    <div class="dropdown-link">
                        <a href="{{ route('products') }}">
                            @lang('menu.product')
                        </a>

                        <div class="dropdown-list">
                            @foreach ($categories as $category)
                                <a href="#">
                                    {{ $category->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
                                </a>
                            @endforeach
                        </div>

                    </div>
                    <div class="dropdown-link">
                        <a href="{{ route('services') }}">
                            @lang('menu.servicii')
                        </a>

                    </div>
                    <div class="dropdown-link">
                        <p>@lang('menu.blog')</p>
                        <div class="dropdown-list">
                            <a href="{{ route('news') }}">
                                @lang('menu.stiri')
                            </a>
                            <a href="gallery.html">
                                @lang('menu.galerie')
                            </a>
                        </div>
                    </div>
                    <a href="sustainability.html">
                        @lang('menu.sustenabilitate')
                    </a>
                    <div class="dropdown-link">
                        <p>
                            @lang('menu.parteneriate')
                        </p>
                        <div class="dropdown-list">
                            <a href="teanagers.html">Tinerii pentru <br> Cristos Moldova</a>
                            <a href="elroy.html">Elroy</a>
                            <a href="help.html">Come over and help</a>
                        </div>
                    </div>
                    <div class="profile-buttons">
                        @if (Auth::check())
                            <a href="{{ route('personalArea') }}">
                                <i class='fas fa-sign-out-alt'></i>
                            </a>
                        @else
                            <a href="{{ route('login') }}">
                                <i class='fa fa-user'></i>
                            </a>
                        @endif


                        <button onclick="cartDrpdn()" class="shoping-cart-button">
                            <p class="cart-item-number">{{ \Cart::session(Session::getId())->getTotalQuantity() }}</p>
                            <i class='fa-solid fa-cart-shopping'></i>
                        </button>
                    </div>
                    @include('layouts.cart')
                </nav>
            </div>
        </header>
    </div>
@endsection
