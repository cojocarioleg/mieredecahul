<section id="main-section">
    <div class="main-section-inner">
        <div class="products">
            <div class="products-header">
                <div class="page-items-counter">
                    {{ $products->links('web.pagination.number') }}
                </div>
                <div class="page-items-switch">


                    <button onclick="pageGridDrpdn()" class="dropbtn-grid">
                        <span>{{ $pag }}</span>
                        <i class="fa fa-sort-down"></i>
                    </button>
                    <div id="myDropdown-grid" class="dropdown-content-grid">
                        <form action="{{ route('paginate') }}" method="POST">
                            @csrf
                            <input type="submit" value="12" name="paginate">
                        </form>
                        <form action="{{ route('paginate') }}" method="POST">
                            @csrf
                            <input type="submit" value="24" name="paginate">
                        </form>
                        <form action="{{ route('paginate') }}" method="POST">
                            @csrf
                            <input type="submit" value="36" name="paginate">
                        </form>
                    </div>
                </div>
                <div class="page-style-switch">
                    <i onclick="viewTh()" class="fa fa-th-large"></i>
                    <i onclick="viewList()" class="fa fa-list"></i>
                </div>
            </div>
            <div id="products-grid" class="product-th">
                @foreach ($products as $product)
                    <div class="product-item">
                        <div class="product-img">
                            <img src="{{ Voyager::image($product->image) }}"
                                alt="{{ $product->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}">
                        </div>
                        <div class="product-about">
                            <div class="top">
                                <a href="{{ route('product', $product->slug) }}" class="product-title">
                                    {{ $product->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
                                </a>
                                <p class="product-price">
                                    {{ $product->price }} lei
                                </p>
                                <div class="rating">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($i < $product->stars)
                                            <span class="fa fa-star checked"></span>
                                        @else
                                            <span class="fa fa-star"></span>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <p class="description">
                                {{ $product->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}
                            </p>
                            <div class="product-list-action">
                                <div class="product-list-action-left">
                                    <a title="Wishlist-product"
                                        href="{{ route('addToBasket', ['id' => $product->id]) }}">
                                        <i class="fa fa-shopping-cart"></i></a>
                                </div>
                                <div class="product-list-action-right">
                                    <a title="Show-product" href="{{ route('product', $product->slug) }}">
                                        <i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
    <br>
    <div class="center-pagination">

        {{ $products->appends(['search' => request()->search])->links('web.pagination.bootstrap-5') }}

    </div>
</section>
