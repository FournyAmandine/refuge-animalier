@props(['field_name', 'type', 'placeholder', 'required', 'label'])

<div class="flex flex-col flex-1 pb-5">
    <label class="font-semibold pb-1" for="{!! $field_name !!}">{!! $label !!} <span class="text-red-600 required">*</span></label>
    <input class="border-2 border-orange-600/80 bg-orange-600/10 rounded-lg p-2"
           type="{!! $type ?? 'text' !!}"
           {{$value ?? old($field_name)}}
           name="{!! $field_name !!}"
           id="{!! $field_name !!}"
           placeholder="{!! $placeholder ?? '' !!}"
        {!! $required ?? '' !!}>

    @error($field_name)
    <p class=
           "error text-red-600 text-xs">{{ $message }}</p>
    @enderror
</div>
