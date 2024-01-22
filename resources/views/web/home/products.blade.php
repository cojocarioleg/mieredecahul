<section id="landing-products">
    <div class="products-inner">
        <h2 class="section-header">
            @lang('product_home.text_1')
        </h2>
        <p class="section-description">
            @lang('product_home.text_2')
        </p>
        <div class="products-grid">
            @foreach ($products as $product)
                <div class="product-item">
                    <div class="product-thumbnail">
                        <img src="{{ Voyager::image($product->image) }}"
                            alt="{{ $product->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">
                            {{ $product->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
                        </h3>
                        <div class="product-rating">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $product->stars)
                                    <span class="fa fa-star checked"></span>
                                @else
                                    <span class="fa fa-star"></span>
                                @endif
                            @endfor
                        </div>
                        <p class="product-price">
                            <span> {{ $product->price }} </span> lei
                        </p>
                        <a href="{{route('product', $product->slug)}}" class="btn btn-sm animated-button thar-three buy">
                            @lang('product_home.text_button')...
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
