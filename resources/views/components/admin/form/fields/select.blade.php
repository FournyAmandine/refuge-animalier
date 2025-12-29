@props(['field_name', 'required', 'label', 'options'])

<div class="flex flex-col flex-1 pb-5">
    <label class="font-semibold pb-1 lg:text-xl" for="{!! $field_name !!}">{!! $label !!}
        @if($required)
            <span class="text-red-600 required">*</span>
        @endif</label>
    <select {!! $attributes->merge(['class'=>'border-2 border-orange-600/80 bg-orange-600/10 rounded-lg p-2 disabled:opacity-40']) !!}name="{!! $field_name !!}" id="{!! $field_name !!}"  @if($required) required @endif>
        {!! $slot !!}
    </select>
</div>
