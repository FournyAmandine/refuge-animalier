@props(['field_name', 'required' => false, 'label', 'options', 'disabled'])

<div class="flex flex-col flex-1 pb-5 ">
    <label class="font-semibold pb-1" for="{!! $field_name !!}">{!! $label !!}
        @if($required)
            <span class="text-red-600 required">*</span>
        @endif
    </label>
    <select class="border-2 border-orange-600/80 bg-orange-600/10 rounded-lg p-2 disabled:opacity-50"
            {!! $disabled??'' !!} name="{!! $field_name !!}" id="{!! $field_name !!}"  @if($required) required @endif>
        {!! $slot !!}
    </select>
</div>
