@props(['dd' => [], 'alt', 'src', 'name', 'title', 'href'])

@php
    $definitions = [
        ['dt' => __('public_animals_index.sex')],
        ['dt' => __('public_animals_index.age')],
        ['dt' => __('public_animals_index.breed')],
    ];
@endphp


<article class="bg-orange-100 border-2 border-orange-600 w-[300px] rounded-xl relative shadow-[var(--shadow-xl)] hover:scale-105 transition duration-300">
    <a class="absolute z-2 inset-0"
       title="{!! $title !!}"
       href="{!! $href !!}">
        <span>{{ __('public_animals_index.view_animal_sheet') }}</span>
    </a>

    <div>
        <div class="relative">
            <x-public.cards.card_img :src="$src" :alt="$alt" :name="$name" />
        </div>

        <div class="pt-4 pb-3 px-5">
            <x-public.cards.card_definition
                :definitions="$definitions"
                :dd="$dd"
            />

            <x-public.cards.card_button
                label="{{ __('public_animals_index.discover_companion') }}"
                :href="$href"
                :title="$title"
            />
        </div>
    </div>
</article>
