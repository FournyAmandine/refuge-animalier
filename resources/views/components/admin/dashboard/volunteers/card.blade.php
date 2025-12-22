@props(['dd' => [], 'alt', 'src', 'name', 'title', 'href', 'id', 'link'=>true])

@php
    $definitions = [
        ['dt'=>'Âge&nbsp;:'],
        ['dt'=>'Arrivée&nbsp;:'],
    ];
@endphp


<article class="bg-orange-50 border-2 border-orange-600 w-[340px] rounded-xl relative shadow-[var(--shadow-xl)]">
    @if($link)
        <a class="absolute z-2 inset-0" title="{!! $title !!}" href="{!! $href !!}"><span>Voir la fiche du bénévole</span></a>
    @endif    <div>
        <div class="relative">
            <x-admin.dashboard.volunteers.card_img :src="$src" :alt="$alt" :name="$name" />
        </div>
        <div class="flex gap-4 absolute right-2 top-85">
            <x-admin.button_action title="Modifier le profil" href="{!! route('admin.volunteers.edit', $id) !!}" :src="asset('assets/img/icones/modify.svg')" alt="Icone d'un crayon pour modifier" />
            <x-admin.modal.button_action  wire:click="toggleModal('delete', {{$id}})" title="Supprimer le profil" href="#" :src="asset('assets/img/icones/delete.svg')" alt="Icone d'une poubelle pour supprimer" />
        </div>
        <div class="pt-4 pb-3 px-5">
            <x-admin.dashboard.volunteers.card_definition :definitions="$definitions" :dd="$dd"/>
        </div>
    </div>
</article>
