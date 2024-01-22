<div class="pa-panel" id="one-panel">
    <div class="one-panel-inner">
      <div class="personal-details">
        <div class="left-side">
          <div class="left-side-inner">
            <div class="user-img">
              <img src="{{ Voyager::image($user->avatar) }}" alt="">
            </div>
            <h1 class="user-name">
              <span class="user_f-name">{{$user->name}}</span>
              <span class="user_l-name">{{$user->sname}}</span>
            </h1>
            <p class="user-phone">{{$user->phone}}</p>
            <p class="user-email">{{$user->email}}</p>
          </div>
        </div>
        <div class="right-side">
          <div class="right-side-inner">
            <h2>@lang('personalArea.adresa'): </h2>
            <div class="user-adress">
              <p class="country">
                @lang('personalArea.tara'): <br>
                <span>
                    <b>{{$user->country}}</b>
                </span>
              </p>
              <p class="city">
                @lang('personalArea.localitatea'): <br>
                <span>
                    <b>{{$user->city}}</b>
                </span>
              </p>
              <p class="postal-code">
                @lang('personalArea.postal'): <br>
                <span>
                    <b>{{$user->postal}}</b>
                </span>
              </p>
              <p class="street">
                @lang('personalArea.strada'): <br>
                <span>
                    <b>{{$user->street}}</b>
                </span>
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
