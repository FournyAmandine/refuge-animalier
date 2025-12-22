@props(['src', 'alt', 'title'])


<button {!! $attributes->merge(['class'=>'hover:scale-110 hover:transition-all hover:duration-200']) !!} title="{!! $title !!}"><img src="{!! $src !!}" alt="{!! $alt !!}"></button>
