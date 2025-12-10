@props(['task', 'number'])

<article class="flex justify-between items-end border-b border-orange-600 mb-2 py-4">
    <h4>{!! $task !!}</h4>
    <span class="day">{!! $number !!}</span>
</article>
