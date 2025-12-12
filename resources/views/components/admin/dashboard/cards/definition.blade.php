@props(['dt', 'dd'])

<div {!! $attributes->merge(['class'=>'flex items-center w-70']) !!}>
    <dt>{!! $dt !!}</dt>
    <dd class="text-xl font-bold pl-2">{!! $dd !!}</dd>
</div>
