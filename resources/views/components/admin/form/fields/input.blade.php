@props(['field_name', 'type' => 'text', 'placeholder' => '', 'required' => false, 'label', 'value' => '','accept'])

<div class="flex flex-col flex-1 pb-5">
    <label class="font-semibold pb-1" for="{{ $field_name }}">
        {{ $label }}
        @if($required)
            <span class="text-red-600 required">*</span>
        @endif
    </label>

    <input
        {{ $attributes->merge([
             'class' => 'border-2 border-orange-600/80 bg-orange-600/10 rounded-lg p-2'
         ]) }}
        type="{{ $type }}"
        name="{{ $field_name }}"
        id="{{ $field_name }}"
        placeholder="{{ $placeholder }}"
        value="{{ $value ?? old($field_name) }}"
        accept="{{$accept??''}}"
        @if($required) required @endif
    >

    @error($field_name)
    <p class="error text-red-600 text-xs">{{ $message }}</p>
    @enderror
</div>
