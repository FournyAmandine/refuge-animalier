@props(['href', 'title', 'label', 'padding_x'])

<a class="inline-block py-2.5 {!! $padding_x !!} bg-orange-600 rounded-lg text-orange-50 font-semibold" href="{!! $href !!}" title="{!! $title !!}">{!! $label !!}</a>
