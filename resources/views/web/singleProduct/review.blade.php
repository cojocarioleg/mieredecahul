<div class="panel" id="two-panel">
    @foreach ($reviews as $review)
        @if ($review->show)
            <div class="prod-review-item">
                <div class="prod-reviewer-img">
                    <img src="{{ Voyager::image(setting('site.logo')) }}" alt="">
                </div>
                <div class="review-collumn">
                    <div class="review-data">
                        <a href="#">
                            {{ $review->name }}
                        </a>
                        <p class="review-date">
                            {{ $review->created_at }}
                        </p>
                        <p class="produs-review-rating">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $product->stars)

                                    <span class="fa fa-star checked"></span>
                                @else
                                    <span class="fa fa-star"></span>
                                @endif
                            @endfor
                        </p>
                    </div>
                    <div class="review-message">
                       {{$review->text}}
                    </div>
                </div>
            </div>
        @endif
    @endforeach


</div>
