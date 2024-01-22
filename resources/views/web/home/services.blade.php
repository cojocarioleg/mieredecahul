<section id="landing-services">
    <div class="services-cards">
        <h2 class="section-header">
            @lang('services.serviciile_noastre')
        </h2>
        <div class="cards-grid">

            @foreach ($services as $service)
                <div class="card-item">
                    <div class="card-thumbnail">
                        <img src="{{ Voyager::image($service->image) }}"
                            alt="{{ $service->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}">
                    </div>
                    <a href="#" class="card-title">
                        {{ $service->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>
