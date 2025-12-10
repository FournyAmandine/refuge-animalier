@props(['day', 'animal', 'contact', 'message'])

<article class="flex justify-between items-end border-b border-orange-600 mb-2">
    <div>
        <h4>{!! $contact !!}</h4>
        <p class="text-sm">{!! $message !!} <span class="animal_name text-[1rem]">{!! $animal??'' !!}</span></p>
    </div>
    <p class="text-sm">Il y a <span class="day">{!! $day !!}</span> jours</p>
</article>
