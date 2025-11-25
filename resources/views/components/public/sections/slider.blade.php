@props(['cards'])


<section class="slider">
    <h2 class="text-orange-600 font-[Baloo] font-extrabold px-[1.25rem]">Nos derniers arrivants</h2>
    <div class="grid grid-cols-[repeat(4,310px)] gap-5 overflow-x-scroll py-4 px-[1.25rem]">
        <x-public.cards.cards_slider :cards="$cards"/>
    </div>
</section>
