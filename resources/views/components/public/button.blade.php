@props(['href', 'title', 'label', 'class_button'])

<a class="z-1 inline-block mb-2.5 py-2.5 {!! $class_button !!} bg-orange-600 rounded-lg text-orange-50 font-semibold" href="{!! $href !!}" title="{!! $title !!}">{!! $label !!}</a>
