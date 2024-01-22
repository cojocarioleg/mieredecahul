<section id="production-process">
    <div class="about-cards">
        <h2 class="section-header">
            @lang('production.text')
        </h2>
        <p class="section-description">
           @lang('production.description')
        </p>
        <div class="cards-grid">
            @foreach ($productions as $prod )
            <div class="card-item">
                <div class="card-thumbnail">
                    <img src="{{ Voyager::image($prod->images) }}"
                    alt="{{ $prod->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}">
                </div>
                <h3 class="card-title">
                    {{ $prod->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
                </h3>
                <p class="card-text">
                    {{ $prod->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>
