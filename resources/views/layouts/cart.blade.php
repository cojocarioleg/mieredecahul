<div id="myDropdown-cart" class="mini-cart">
    <div class="mini-cart-item-list">
        @foreach ($cart as $item)
            <div class="mini-cart-item">
                <div class="mini-cart-item-img">
                    <img src="{{ Voyager::image($item->attributes->image) }}" alt="">
                </div>
                <div class="mini-cart-item-about">
                    <a href="#" class="item-title">
                        {{ $item->name }}
                    </a>
                    <p class="quantity">Cantitate: <span>{{ $item->quantity }}</span></p>
                    <div class="price">
                        <span>{{ $item->price * $item->quantity }}</span> lei
                    </div>
                    <form action="{{ route('removeToBasket', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="delete">
                            <i class='fa fa-remove'></i>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach


    </div>
    <div class="mini-cart-total">
        <p class="text">Total:</p>
        <p class="price">
            <span>{{ \Cart::getTotal('price') }}</span> lei
        </p>
    </div>
    <div class="mini-cart-buttons">

        <form action="{{route('shopingCart')}}" method="get">
            @csrf
            <button type="submit">View Cart</button>
        </form>

        <form action="{{route('checkout')}}" method="get">
            @csrf
            <button type="submit">Checkout</button>
        </form>

    </div>
</div>
