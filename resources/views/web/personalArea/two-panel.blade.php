<div class="pa-panel" id="two-panel">
    <form role="form" method="POST" action="{{ route('personalArea') }}" enctype="multipart/form-data">
        @csrf
        <div class="personal-details">
            <div class="left-side">
                <div class="left-side">
                    <div class="left-side-inner">
                        <div class="user-img">
                            <img src="{{ Voyager::image($user->avatar) }}" alt="">
                            <div class="Neon Neon-theme-dragdropbox">
                                <input
                                    style="z-index: 999; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto; font-size: 1px;"
                                    name="avatar" id="filer_input2" multiple="multiple" type="file">
                                <div class="Neon-input-dragDrop">
                                    <div class="Neon-input-inner">
                                        <div class="Neon-input-icon">
                                            <i class="fa fa-file-image-o"></i>
                                        </div>
                                        <div class="Neon-input-text">
                                            <h3>
                                                @lang('personalArea.imagine')
                                            </h3>
                                            <span style="display:inline-block; margin: 15px 0">
                                                @lang('personalArea.imagine_2')
                                            </span>
                                        </div>
                                        <a class="Neon-input-choose-btn blue">
                                            @lang('personalArea.imagine_3')
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label for="sname">@lang('personalArea.name'): </label><br>
                        <input type="text" id="sname" name="sname" value="{{ $user->sname }}" required><br>
                        <label for="name">@lang('personalArea.prenume') </label><br>
                        <input type="text" id="name" name="name" value="{{ $user->name }}" required><br>
                    </div>
                </div>
            </div>
            <div class="right-side">
                <div class="right-side-inner">
                    <h2>
                        @lang('personalArea.contacte'):
                    </h2>
                    <div class="user-adress">
                        <div class="adress-edit-box">
                            <label for="phone">
                                @lang('personalArea.telefon')\
                            </label><br>
                            <input type="text" id="phone" name="phone" placeholder="{{ $user->phone }}"
                                value="{{ $user->phone }}">
                        </div>
                        <div class="adress-edit-box">
                            <label for="email">
                                @lang('personalArea.email')
                            </label><br>
                            <input type="email" id="email" name="email" placeholder="{{ $user->email }}"
                                value="{{ $user->email }}">
                        </div>
                        <div class="adress-edit-box">
                            <label for="country">
                                @lang('personalArea.tara'):
                            </label><br>
                            <input type="text" id="country" name="country" placeholder="{{ $user->country }}"
                                value="{{ $user->country }}">
                        </div>
                        <div class="adress-edit-box">
                            <label for="city">
                                @lang('personalArea.localitatea'):
                            </label><br>
                            <input type="text" id="city" name="city" placeholder="{{ $user->city }}"
                                value="{{ $user->city }}">
                        </div>
                        <div class="adress-edit-box">
                            <label for="p-code">
                                @lang('personalArea.postal'):
                            </label><br>
                            <input type="text" id="p-code" name="postal" placeholder="{{ $user->postal }}"
                                value="{{ $user->postal }}">
                        </div>
                        <div class="adress-edit-box">
                            <label for="street">
                                @lang('personalArea.strada'):
                            </label><br>
                            <input type="text" id="street" name="street" placeholder="{{ $user->street }}"
                                value="{{ $user->street }}">
                        </div>

                    </div>
                    <button type="submit" class="update-account">
                        @lang('personalArea.save')
                    </button>

                </div>
            </div>
        </div>
    </form>
    <form action="{{ route('personalAreaDestroy') }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete-account" onclick="return confirm('Confirm deletion')">
            @lang('personalArea.delete')
        </button>
    </form>
</div>
