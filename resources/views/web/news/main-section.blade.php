<section id="main-section">
    <div class="main-section-inner">
        <div class="service">
            <div class="offer-single-image">
                <img src="{{ Voyager::image($new->image) }}"
                alt="{{ $new->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}">
            </div>
            <h1 class="section-header offer-single-title">
                {{ $new->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}.
            </h1>
           {!!$new->getTranslatedAttribute('content', App::getLocale(), 'fallbackLocale')!!}
        </div>
    </div>
</section>
