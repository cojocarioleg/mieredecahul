@section('footer')
<footer>
    <div class="footer-inner">
        <div class="footer-contacts">
            <div class="footer-contact">
                <div class="contact-icon">
                    <i class='fa-solid fa-location-dot'></i>
                </div>
                <div class="contact-text">
                    <h2>Locație</h2>
                    <p>Republica Moldova, Cahul</p>
                </div>
            </div>
            <div class="footer-contact">
                <div class="contact-icon">
                    <i class='fa fa-phone'></i>
                </div>
                <div class="contact-text">
                    <h2>Telefon</h2>
                    <a href="tel:+373{{setting('site.phone')}}">(+373){{setting('site.phone')}}</a>
                </div>
            </div>
            <div class="footer-contact">
                <div class="contact-icon">
                    <i class='fa fa-envelope'></i>
                </div>
                <div class="contact-text">
                    <h2>E-mail</h2>
                    <a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-icon">
                <img src="{{ Voyager::image(setting('site.footer_logo')) }}" alt="">
            </div>
            <div class="footer-social">
                <h2>Follow-us</h2>
                <hr>
                <div class="liks">
                    @include('layouts.socials')
                </div>
            </div>
            <div class="footer-subscribe">
                <h2>Subscribe</h2>
                <hr>
                <p>Înscrie-te la noutăți, promoții pentru a afla primul</p>
                <form action="">
                    <input type="text" placeholder="Emailul tău" name="search">
                      <button type="submit"><i class='fa fa-send'></i></button>
                </form>
            </div>
        </div>
    </div>
</footer>
</div>
<script type="text/javascript" src="{{asset('javascript/script.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/app.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/bootstrap.js')}}"></script>
@yield('js')

@endsection
