<div class="panel" id="one-panel">
    <h3 class="produs-title">
        {{ $product->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
    </h3>
    {!! $product->getTranslatedAttribute('content', App::getLocale(), 'fallbackLocale') !!}
  </div>
