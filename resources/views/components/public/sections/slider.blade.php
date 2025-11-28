@props(['cards', 'sro'])


<section class="slider">
    <div class="grid grid-cols-[repeat(4,310px)] gap-5 overflow-x-scroll py-4 px-[1.25rem]">
        <x-public.cards.cards_slider :cards="$cards"/>
    </div>
</section>
