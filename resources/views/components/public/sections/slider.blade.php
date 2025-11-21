@props(['cards'])


<section class="pb-26 slider">
    <h2 class="mb-2.5 text-orange-600 font-[Baloo] font-extrabold px-[1.25rem]">Nos derniers arrivants</h2>
    <div class="grid grid-cols-[repeat(4,310px)] gap-5 overflow-x-scroll py-5 px-[1.25rem]">
        <x-public.cards.cards_slider :cards="$cards"/>
    </div>
</section>
