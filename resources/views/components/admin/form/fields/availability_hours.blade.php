@props(['model'])

<div class="flex text-xl font-medium gap-6 disabled:opacity-40">
    <div class="flex gap-1">
        <label for="start">de</label>
        <input {!! $attributes->merge(['class'=>'disabled:opacity-40 hours']) !!} wire:model="form.availabilities.{{ $model }}.start" type="time" name="start" id="start">
    </div>
    <div class="flex gap-1">
        <label for="end">à</label>
        <input  {!! $attributes->merge(['class'=>'disabled:opacity-40 hours']) !!} wire:model="form.availabilities.{{ $model }}.end"  type="time" name="end" id="end">
    </div>
</div>
