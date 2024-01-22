@foreach ($socials as $social)
    <a href="{{$social->link}}">
        <i class="fa fa-{{$social->title}}"></i>
    </a>
@endforeach
