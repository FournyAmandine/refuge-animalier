@props(['src', 'alt', 'href', 'title'])


<a {!! $attributes->merge(['class'=>'hover:scale-110 hover:transition-all hover:duration-200'])  !!} href="{!! $href !!}" title="{!! $title !!}"><img src="{!! $src !!}" alt="{!! $alt !!}"></a>
