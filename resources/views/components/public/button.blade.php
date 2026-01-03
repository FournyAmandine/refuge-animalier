@props(['href', 'title', 'label', 'class_button'])

<a class="z-1 inline-block py-2.5 lg:text-lg 2xl:text-2xl {!! $class_button !!} bg-orange-600 rounded-lg text-orange-50 font-semibold" href="{!! $href !!}" title="{!! $title !!}">{!! $label !!}</a>
