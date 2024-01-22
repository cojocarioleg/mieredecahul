<div class="product-slider">
    <div class="slideshow-container">
        @foreach (json_decode($product->images, true) as $image)
            @if ($loop->first)
            <div class="mySlides fade">
                <img src="{{ Voyager::image($product->image) }}"
                    alt="{{ $product->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}">
              </div>
            @else
            <div class="mySlides fade">
                <img src="{{ Voyager::image($image) }}" style="width:100%">
              </div>
            @endif
        @endforeach

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
        @foreach (json_decode($product->images, true) as $image )
            <span class="dot" onclick="currentSlide({{$product->id}})"></span>
        @endforeach

    </div>
</div>


