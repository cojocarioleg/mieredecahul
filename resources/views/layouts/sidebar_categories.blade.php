<div class="sidebar-part product-sort-inner">
    <h3 class="sort-title">
        @lang('sidebar.category_title')
    </h3>
    @foreach ($categories as $category)
    @if($loop->first)
        <button type="button" class="collapsible col-first">
    @else
    <button type="button" class="collapsible">
    @endif

            <span class="collapsible-button">
                <span class="collapsible-side">
                    {{ $category->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
                </span>
                <i class="fa fa-angle-down"></i>
            </span>
        </button>
        <div class="content">
            @foreach ($category->products as $product)
                <a href="#" class="dropdown-sort-link">
                    {{ $product->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
                </a><br>
            @endforeach
        </div>
    @endforeach
</div>
