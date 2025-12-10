@props(['class_div', 'class_input', 'field_name', 'type', 'class_label', 'value', 'required', 'label', 'wire'])

<div  class="{!! $class_div ?? 'flex items-center gap-2' !!}">
    <input  class="{!! $class_input ?? 'w-5 h-5' !!}"
            type="{!! $type ?? 'checkbox' !!}"
            name="{!! $field_name !!}_active"
            id="{!! $field_name !!}"
            x-model="active"
            value="{!! $value ?? $field_name !!}"
        {!! $required ?? '' !!}>
    <label class="{!! $class_label ?? 'lg:text-xl font-medium' !!}" for="{!! $field_name !!}">{!! $label !!}</label>
</div>
