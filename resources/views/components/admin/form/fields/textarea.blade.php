@props(['field_name', 'placeholder', 'label', 'required'=>false])

<div class="flex flex-col pt-5">
    <label class="font-semibold pt-1 pb-2.5 lg:text-xl" for="{!! $field_name !!}">{!! $label !!}
        @if($required)
            <span class="text-red-600 required">*</span>
        @endif
    </label>
    <textarea {!! $attributes !!}  @if($required) required @endif name="{!! $field_name !!}" id="{!! $field_name !!}" cols="25" rows="5" class="border-2 border-orange-600/80 bg-orange-600/10 rounded-lg p-2" placeholder="{!! $placeholder !!}"></textarea>
</div>
