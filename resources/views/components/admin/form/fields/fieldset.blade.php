@props(['legend'])


<fieldset class="border-2 border-orange-600 p-5 rounded-lg shadow-lg bg-white mb-25">
    <legend class="text-xl p-2 lg:text-2xl">{!! $legend !!}</legend>
    {!! $slot !!}
</fieldset>
