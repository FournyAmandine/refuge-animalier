<div class="hours flex text-xl font-medium gap-6 disabled:opacity-40">
    <div class="flex gap-1">
        <label for="from">de</label>
        <input class="disabled:opacity-40" type="time" name="start_time" id="from" :disabled="!active">
    </div>
    <div class="flex gap-1" :disabled="!active">
        <label for="to">à</label>
        <input class="disabled:opacity-40" type="time" name="end_time" id="to" :disabled="!active">
    </div>
</div>
