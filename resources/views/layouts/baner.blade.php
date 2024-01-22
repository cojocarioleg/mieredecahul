<section id="page-banner">
    <div class="page-banner-inner">
        <div class="page-banner-content">
            <h1 class="page-banner-title"> @lang('banner.title') |
                <span>{{$baner}}</span>
            </h1>
            <p class="page-banner-links">
                <a href="{{route('home')}}">
                    @lang('banner.home')
                </a> /
                <a href="{{route('products')}}">
                    @lang('banner.products')
                </a> /
                <a href="#">Link 2</a>
            </p>
        </div>
    </div>
</section>
