@props(['li_class', 'href', 'label', 'title'])

<li class="{!! $li_class !!}"><a wire:navigate title="{!! $title !!}" href="{!! $href !!}">{!! $label !!}</a></li>
