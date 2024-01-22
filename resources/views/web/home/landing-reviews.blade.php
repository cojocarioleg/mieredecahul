<section id="landing-reviews">
    <div class="landing-reviews-inner">
        <div class="reviews-inner">
            <h2 class="section-header">
                @lang('review.text_1')
            </h2>
            <p class="section-description">
                @lang('review.text_2')
            </p>
            <section class="container-review">
                <div class="testimonial-rew mySwiperRew">
                    <div class="testi-content-rews swiper-wrapper-rews">
                        @foreach ($reviews as $review)
                            <div class="slide-rew swiper-slide-rew" style="display: inherit;">
                                <img src="{{ Voyager::image($review->image) }}" alt="" class="image-rews">
                                <p>
                                    {{ $review->getTranslatedAttribute('text', App::getLocale(), 'fallbackLocale') }}
                                </p>

                                <div class="details-rew">
                                    <span class="name-rews">{{ $review->name }}</span>
                                    <span class="job-rews">
                                        {{ $review->getTranslatedAttribute('job', App::getLocale(), 'fallbackLocale') }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                        <a class="rew-prev swiper-button-prev-rew nav-btn-rew" onclick="plusSlides(-1)">❮</a>
                        <a class="rew-next swiper-button-next-rew nav-btn-rew" onclick="plusSlides(1)">❯</a>
                    </div>


                    <div class="swiper-pagination-rew">
                        <span class="dot-rew active" onclick="currentSlide(1)"></span>
                        <span class="dot-rew" onclick="currentSlide(2)"></span>
                        <span class="dot-rew" onclick="currentSlide(3)"></span>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>


