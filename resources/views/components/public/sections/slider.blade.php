@props(['cards'])


<section class="pb-26">
    <h2 class="mb-2.5 text-orange-600 font-[Baloo] font-extrabold">Nos derniers arrivants</h2>
    <div class="grid grid-cols-[repeat(4,310px)] gap-5 overflow-x-scroll">
        <x-public.cards.cards_slider :cards="$cards"/>
    </div>
</section>
