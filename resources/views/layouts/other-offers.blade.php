<section id="other-offers">
    <h1 class="section-header">
        @lang('news.last_news')
    </h1>
    <div class="other-offers-inner">
        @foreach ($last_news->take(3) as $new)
        <div class="offer-item">
            <div href="" class="offer-thumbnail">
                <a href="{{ route('singleNew', $new->slug) }}">
                    <img  src="{{ Voyager::image($new->image) }}"
                        alt="{{ $new->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}">
                </a>
            </div>
            <div class="offer-about">
                <h3 class="offer-title">
                    <a href="{{ route('singleNew', $new->slug) }}">
                        {{ $new->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}.
                    </a>
                </h3>
                <a href="{{ route('singleNew', $new->slug) }}" class="btn btn-sm animated-button thar-three">
                    @lang('news.button')
                </a>
            </div>
        </div>
        @endforeach

    </div>
</section>
