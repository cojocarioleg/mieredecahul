<section id="main-section">
    <div class="main-section-inner">
        <p class="section-description">
            @lang('team.text')
        </p>
        <div class="team-list">
            @foreach ($teams as $team )
            <div class="team-list-item">
                <div class="member-img">
                    <img src="{{ Voyager::image($team->image) }}" alt="{{$team->name.' '.$team->sname}}">
                </div>
                <div class="member-info">
                    <a href="member.html">
                        <h1 class="member-name">
                            <span class="fname">{{$team->name}} </span>
                            <span class="lname">{{$team->sname}} </span>
                        </h1>
                    </a>
                    <p class="member-function">
                        {{ $team->getTranslatedAttribute('function', App::getLocale(), 'fallbackLocale') }}
                    </p>
                    <div class="member-links">
                        <div class="links-item">
                            <p class="momber-phone">@lang('team.phone')
                                <a href="tel:{{$team->phone}}">{{$team->phone}}</a>
                            </p>
                        </div>
                        <div class="links-item social-network">
                            <a href="{{$team->facebook}}"><i class='fa fa-facebook-f'></i></a>
                            <a href="{{$team->instagram}}"><i class='fa fa-instagram'></i></a>
                            <a href="{{$team->odnoklassniki}}"><i class="fa fa-odnoklassniki"></i></a>
                        </div>
                        <div class="links-item">
                            <p class="member-mail">@lang('team.email')
                                <a href="mailto:{{$team->email}}">
                                    {{$team->email}}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
