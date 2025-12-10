@props(['href', 'title', 'label'])

<a {!! $attributes->merge(['class' => 'z-1 inline-block mb-2.5 py-2.5 lg:text-lg 2xl:text-xl bg-orange-600 rounded-lg text-orange-50 font-semibold'])!!} href="{!! $href !!}" title="{!! $title !!}">{!! $label !!}</a>
