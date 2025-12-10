@props(['value', 'id', 'field_name', 'label'])

<div>
    <input type="radio" value="{!! $value !!}" id="{!! $id !!}" name="{!! $field_name !!}">
    <label for="{!! $id !!}">{!! $label !!}</label>
</div>
