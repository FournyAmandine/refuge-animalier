@props(['href', 'title', 'label'])

<a {!! $attributes->merge(['class' => 'z-1 inline-block py-2.5 lg:text-lg 2xl:text-xl bg-orange-600 rounded-lg text-orange-50 font-semibold hover:scale-110 hover:duration-200 hover:transition-all'])!!} href="{!! $href !!}" title="{!! $title !!}">{!! $label !!}</a>
