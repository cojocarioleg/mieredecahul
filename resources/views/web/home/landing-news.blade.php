<section id="landing-news">
    <div class="landing-news-inner">
        <h2 class="section-header">
            @lang('news.title-home')
        </h2>
        <p class="section-description">
            @lang('news.text-home')
        </p>
        <div class="news-grid">
            @foreach ($news as $new)
                <div class="news-card">
                    <div class="news-thumbnail">
                        <img  src="{{ Voyager::image($new->image) }}"
                                alt="{{ $new->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}">
                    </div>
                    <div class="news-data">
                        <p class="data-item">
                            <i class='fa fa-calendar'></i>
                            {{ $new->created_at->format('d/m/Y') }}
                        </p>
                        <p class="data-item">
                            <i class='fa-solid fa-location-dot'></i> {{$new->location}}
                        </p>

                    </div>
                    <div class="news-content">
                        <a href="{{ route('singleNew', $new->slug) }}" class="news-title">
                            {{ $new->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}.
                        </a>
                        <p class="news-text">
                            {{ $new->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}.
                        </p>
                        <div class="continue-button">
                            <a href="{{ route('news') }}" class="btn btn-sm animated-button thar-three">
                                Află mai multe
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
