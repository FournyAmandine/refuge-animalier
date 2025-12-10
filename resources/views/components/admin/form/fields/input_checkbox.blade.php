<div  class="{!! $class_div ?? '' !!}">
    <input  class="{!! $class_input ?? '' !!}"
            type="{!! $type ?? 'checkbox' !!}"
            name="{!! $field_name !!}"
            id="{!! $field_name !!}"
            value="{!! $value ?? $field_name !!}"
        {!! $required ?? '' !!}>
    <label class="{!! $class_label ?? '' !!}" for="{!! $field_name !!}">{!! $slot !!}</label>
</div>
