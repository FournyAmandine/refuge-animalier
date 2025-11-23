@props(['dd' => [], 'alt', 'src', 'name', 'title', 'href'])

@php
    $definitions = [
        ['dt'=>'Sexe'],
        ['dt'=>'Âge'],
        ['dt'=>'Race'],
    ];
@endphp


<article class="bg-orange-100 border-2 border-orange-600 max-w-77.5 rounded-xl relative shadow-[var(--shadow-xl)]">
    <div class="relative">
        <x-public.cards.card_img :src="$src" :alt="$alt" :name="$name" />
    </div>
    <div class="pt-4 pb-3 px-5">
        <x-public.cards.card_definition :definitions="$definitions" :dd="$dd"/>
        <x-public.cards.card_button label="Découvrir ce compagnon" :href="$href" :title="$title"/>
    </div>
</article>
