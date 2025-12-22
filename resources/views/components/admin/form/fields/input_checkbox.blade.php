@props(['class_div', 'field_name', 'type', 'class_label', 'value', 'required', 'label', 'wire'=>true, 'checked'=>'', 'id'=>''])

<div  class="{!! $class_div ?? 'flex items-center gap-2' !!}">
    <input  {!! $attributes->merge(['class'=>'w-5 h-5']) !!}
        @if($wire)
            wire:model.live="form.availabilities.{{ $label }}.active"
        @endif
            {!! $checked ? 'checked' : '' !!}
            type="{!! $type ?? 'checkbox' !!}"
            name="{!! $field_name !!}"
            id="{!! $field_name !!}"
            value="{!! $value ?? $field_name !!}"
        {!! $required ?? '' !!}>
    <label class="{!! $class_label ?? 'lg:text-xl font-medium' !!}" for="{!! $field_name !!}">{!! $label !!}</label>
</div>

