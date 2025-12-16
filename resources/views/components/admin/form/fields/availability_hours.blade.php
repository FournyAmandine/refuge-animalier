@props(['model'])

<div class="hours flex text-xl font-medium gap-6 disabled:opacity-40">
    <div class="flex gap-1">
        <label for="start">de</label>
        <input {!! $attributes->merge(['class'=>'disabled:opacity-40']) !!} wire:model="{{ $model }}.start" type="time" name="start" id="start" :disabled="!active">
    </div>
    <div class="flex gap-1">
        <label for="end">à</label>
        <input  {!! $attributes->merge(['class'=>'disabled:opacity-40']) !!} wire:model="{{ $model }}.end"  type="time" name="end" id="end" :disabled="!active">
    </div>
</div>
