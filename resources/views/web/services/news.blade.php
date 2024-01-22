<section id="main-section">
    <div class="main-section-inner">
        <div class="news">
            <div class="news-grid">
                @foreach ($news as $new)
                    <div class="news-card">
                        <div class="news-thumbnail">
                            <img src="{{ Voyager::image($new->image) }}"
                                alt="{{ $new->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}">
                        </div>
                        <div class="news-data">
                            <p class="data-item">
                                <i class='fa fa-calendar'>
                                </i> {{ $new->created_at->format('d/m/Y') }}
                            </p>
                            <p class="data-item">
                                <i class='fa-solid fa-location-dot'></i>
                                {{$new->location}}
                            </p>

                        </div>
                        <div class="news-content">
                            <a href="{{ route('singleService', $new->slug) }}" class="news-title">
                                {{ $new->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}.
                            </a>
                            <p class="news-text">
                                {{ $new->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
    {{ $news->appends(['search' => request()->search])->links('web.pagination.bootstrap-5') }}
</section>
