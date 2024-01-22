@extends('layouts.main')
@extends('layouts.head')
@extends('layouts.header')
@extends('layouts.header-top')
@extends('layouts.footer')
@section('title')
    {{$user->name.' '.$user->sname}}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/personal-area.css') }}">
@endsection

@section('content')
<div id="content">
    @include('layouts.baner', ['baner' => $user->name.' '.$user->sname])
    @include('web.personalArea.personal-area-header')
    @include('layouts.succes')
    <section id="user-info">
        <div class="pa-tabs">
            <input class="radio" id="one" name="group" type="radio" checked="">
            <input class="radio" id="two" name="group" type="radio">
            <input class="radio" id="three" name="group" type="radio">
            <input class="radio" id="four" name="group" type="radio">
            <div class="pers-area-tabs">
                <label class="pa-tab" id="one-tab" for="one">
                    <i class="fa fa-user"></i> @lang('personalArea.general')
                </label>
                <label class="pa-tab" id="two-tab" for="two">
                    <i class="fa fa-edit"></i> @lang('personalArea.edit')
                </label>
                <label class="pa-tab" id="three-tab" for="three">
                    <i class="fa fa-shopping-basket"></i> @lang('personalArea.istoric')
                </label>
                <label class="pa-tab" id="four-tab" for="four">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                            <i class='fa fa-sign-out'></i>
                            {{ __('Log Out') }}
                        </button>
                      </form>

                </label>
            </div>

            <div class="pa-panels">
               @include('web.personalArea.one-panel')

                @include('web.personalArea.two-panel')

               @include('web.personalArea.three-panel')
                <div class="pa-panel" id="four-panel">
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
