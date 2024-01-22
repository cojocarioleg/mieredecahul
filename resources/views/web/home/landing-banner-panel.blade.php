<div class="landing-banner-panel">
    @foreach ($benefits as $benefit)
        <div class="panel-item">

            <div class="thumbnail">
                <img src="{{ Voyager::image($benefit->image) }}"
                    alt="{{ $benefit->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}">
            </div>
            <div class="text">
                <h3>
                    {{ $benefit->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
                </h3>
                <p>
                    {{ $benefit->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}
                </p>
            </div>
        </div>
        <div class="vl"></div>
    @endforeach
</div>
