<div class="sidebar-part latest-news">
    <h3 class="sort-title">
        @lang('sidebar.last_news')
    </h3>
    <div class="latest-news-collumn">
        @foreach ($last_news as $new)
        <div class="latest-news-item">
            <div class="latest-news-img">
                <img src="{{ Voyager::image($new->image) }}"
                    alt="{{ $new->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}">
            </div>
            <div class="latest-news-data">
                <a href="#" class="latest-news-title">
                    {{ $new->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}.
                </a>
                <p class="latest-news-date">
                    {{ $new->created_at->format('d.m.Y') }}
                </p>
            </div>
        </div>
        @endforeach

    </div>
</div>
