@if ($offer->active)
    <section id="landing-offer">
        <div class="landing-offer-inner">
            <div class="top-right-img">
                <img src="{{ Voyager::image($offer->image_3) }}"
                    alt="{{ $offer->getTranslatedAttribute('text_2', App::getLocale(), 'fallbackLocale') }}">
            </div>
            <div class="offer-row">
                <div class="offer-info">
                    <div class="offer-info-inner " id="offer-timer">
                        <h1 class="offer-title">
                            {{ $offer->getTranslatedAttribute('text_1', App::getLocale(), 'fallbackLocale') }}
                        </h1>
                        <p class="offer-text">
                            {{ $offer->getTranslatedAttribute('text_2', App::getLocale(), 'fallbackLocale') }}
                            Oferta valabilă doar: </p>
                        <div class="offer-timer" >
                            <div class="time-card">
                                <h1 class="value" id="d">4</h1>
                                <p class="unit-measure">zile</p>
                            </div>
                            <div class="time-card">
                                <h1 class="value" id="h" >22</h1>
                                <p class="unit-measure ">ore</p>
                            </div>
                            <div class="time-card">
                                <h1 class="value" id="m">36</h1>
                                <p class="unit-measure">min</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="offer-thumbnail">
                    <img src="{{ Voyager::image($offer->image_1) }}"
                        alt="{{ $offer->getTranslatedAttribute('text_2', App::getLocale(), 'fallbackLocale') }}">
                </div>
            </div>
            <div class="bottom-left-img">
                <img src="{{ Voyager::image($offer->image_2) }}"
                    alt="{{ $offer->getTranslatedAttribute('text_1', App::getLocale(), 'fallbackLocale') }}">
            </div>
        </div>
    </section>
@endif

