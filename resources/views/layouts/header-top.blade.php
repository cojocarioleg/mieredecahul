@section('header-top')
<div class="header-top">
    <div class="header-top-inner">
        <div class="contacts">
            <a href="mailto:{{setting('site.email')}}">
                <i class='fa fa-envelope'></i>{{setting('site.email')}}
            </a>
            <a href="tel:+373{{setting('site.phone')}}">
                <i class='fa fa-phone'> </i>+373{{setting('site.phone')}}
            </a>
        </div>
        <div class="preferences">
            <div class="share">
                @include('layouts.socials')
            </div>
            <div class="dropdown-lang">
                <button onclick="langDrpdn()" class="dropbtn-lang">
                    <i class='fa fa-language'> </i>
                    <span>{{ LaravelLocalization::getCurrentLocale() }}</span>
                </button>
                <div id="myDropdown-lang" class="dropdown-content-lang">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                      {{ $localeCode }}
                    </a>
                  @endforeach
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
