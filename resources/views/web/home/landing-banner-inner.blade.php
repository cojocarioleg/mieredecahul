<div class="landing-background">
    <img src="{{ Voyager::image($banner->image) }}"
    alt="{{ $banner->getTranslatedAttribute('text_1', App::getLocale(), 'fallbackLocale') }}">
</div>
<div class="landing-banner-inner">
    <div class="landing-banner-content">
        <h1 class="banner-title">
            {{ $banner->getTranslatedAttribute('text_1', App::getLocale(), 'fallbackLocale') }}
        </h1>
        <h1 class="banner-title">
            {{ $banner->getTranslatedAttribute('text_2', App::getLocale(), 'fallbackLocale') }}
        </h1>
        <p class="banner-quote">
            {{ $banner->getTranslatedAttribute('text_3', App::getLocale(), 'fallbackLocale') }}
        </p>
        <a href="" class="btn btn-sm animated-button thar-three">
            @lang('home_baner.button')
        </a>
    </div>
</div>
