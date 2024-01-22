<div class="sidebar-part latest-products">
    <h3 class="sort-title">
        @lang('sidebar.product_title')
    </h3>
    <div class="latest-products-collumn">

        <div class="latest-products-item">
            <ul>
                @foreach ($last_products as $product)
                <li>
                    <a href="#">
                        {{ $product->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
