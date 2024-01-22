<section id="personal-area-header">
    <div class="personal-area-header">
        <p>@lang('personalArea.salut') <b><span class="user_f-name">{{$user->name}}</span>
            <span class="user_s-name">{{$user->sname}}</span></b>
            <span>(@lang('personalArea.not_you') <b>
                <span class="user_f-name">{{$user->name}}</span>
                <span class="user_l-name">{{$user->sname}}</span></b>?
                <a href="">Log Out)</a>
            </span>
            </p><br>
            <p>@lang('personalArea.line_1')</p><br>
            <p>@lang('personalArea.line_2_1') <b>@lang('personalArea.line_2_2')</b></p><br>
            <p>@lang('personalArea.line_3_1') <b>@lang('personalArea.line_3_2')</b></p><br>
            <p>@lang('personalArea.line_4_1') <b>@lang('personalArea.line_4_2')</b></p><br>
    </div>
</section>
