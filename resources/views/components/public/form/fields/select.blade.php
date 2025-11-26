@props(['field_name', 'required', 'label', 'options'])

<div class="flex flex-col flex-1 pb-5">
    <label class="font-semibold pb-1" for="{!! $field_name !!}">{!! $label !!} <span class="text-red-600 required">*</span></label>
    <select class="border-2 border-orange-600/80 bg-orange-600/10 rounded-lg p-2" name="{!! $field_name !!}" id="{!! $field_name !!}" {!! $required ?? '' !!}>
        {!! $slot !!}
    </select>
</div>
