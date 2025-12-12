@props(['dd' => [], 'alt', 'src', 'name', 'title', 'href', 'link'=>true, 'href_button', 'animal_id'])

@php
    $definitions = [
        ['dt'=>'Sexe&nbsp;:'],
        ['dt'=>'Âge&nbsp;:'],
        ['dt'=>'Race&nbsp;:'],
        ['dt'=>'Statut&nbsp;:'],
        ['dt'=>'Arrivée&nbsp;:'],
    ];
@endphp


<article {!! $attributes->merge(['class'=>'bg-orange-50 border-2 border-orange-600 rounded-xl relative shadow-[var(--shadow-xl)] hover:scale-105 transition duration-300']) !!}>
    @if($link)
        <a class="absolute z-2 inset-0" title="{!! $title !!}" href="{!! $href !!}"><span>Voir la fiche de l'animal</span></a>
    @endif
    <div>
        <div class="relative">
            <x-admin.dashboard.cards.card_img :src="$src" :alt="$alt" :name="$name" />
        </div>
        <div class="flex gap-4 absolute right-2 top-55">
            <x-admin.button_action :href="$href_button" title="Aller vers la page de modification de l'animal" :src="asset('assets/img/icones/modify.svg')" alt="Icone d'un crayon pour modifier" />
            <x-admin.button_action href="#" wire:click="delete({!! $animal_id !!})" title="Supprimer votre animal" :src="asset('assets/img/icones/delete.svg')" alt="Icone d'une poubelle pour supprimer" />
        </div>
        <div class="pt-4 pb-3 px-5">
            <x-admin.dashboard.cards.card_definition :definitions="$definitions" :dd="$dd"/>
        </div>
    </div>
</article>
