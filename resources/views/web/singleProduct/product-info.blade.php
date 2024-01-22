<div class="product-info">
    <h3 class="product-title">
        {{ $product->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
    </h3>
    <div class="product-rating">
        <?php $k = 0; ?>
        @for ($i = 0; $i < 5; $i++)
            @if ($i < $product->stars)
                <?php $k++; ?>
                <span class="fa fa-star checked"></span>
            @else
                <span class="fa fa-star"></span>
            @endif
        @endfor
        <span class="feedback-number">(<span>{{ $k }}</span> @lang('product.recenzii'))</span>
    </div>
    <h3 class="product-price">
        <span>{{ $product->price }}</span> lei
    </h3>
    <p class="product-description">
        {{ $product->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}
    </p>

    <p class="size">
        Vasul: <span><b>borcănaș 0,5l</b></span>
    </p>
    <p class="qant">Cantitate: <span>3kg</span></p>
    @if ($product->in_stok)
        <p class="stock">@lang('product.in_stoc'): <span>Yes</span></p>
        <br><br>
    @else
        <p class="stock">@lang('product.in_stoc'): <span>No</span></p>
        <br><br>
    @endif
    <form action="{{ route('addToBasket',['id'=>$product->id]) }}" method="POST">
        @csrf
        <button type="submit" class="sent">
            @lang('product.add_product')
        </button>
    </form>
</div>
