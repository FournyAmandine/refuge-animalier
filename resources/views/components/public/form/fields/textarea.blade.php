@props(['field_name', 'placeholder', 'label'])

<div class="flex flex-col">
    <label class="font-semibold pt-1" for="{!! $field_name !!}">{!! $label !!}</label>
    <textarea name="{!! $field_name !!}" id="{!! $field_name !!}" cols="25" rows="5" class="border-2 border-orange-600/80 bg-orange-600/10 rounded-lg p-2" placeholder="{!! $placeholder !!}"></textarea>
</div>
