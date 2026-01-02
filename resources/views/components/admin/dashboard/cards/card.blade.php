@props(['dd' => [], 'alt', 'src', 'name', 'title', 'href', 'link'=>true, 'href_button', 'animal_id', 'src_db', 'src_storage', 'href_see'])

@php
    $definitions = [
        ['dt'=> __('dashboard.sex') . '&nbsp;:'],
        ['dt'=> __('dashboard.age') . '&nbsp;:'],
        ['dt'=> __('dashboard.breed') . '&nbsp;:'],
        ['dt'=> __('dashboard.status') . '&nbsp;:'],
        ['dt'=> __('dashboard.arrival') . '&nbsp;:'],
    ];
@endphp

<article {!! $attributes->merge(['class'=>'bg-orange-50 border-2 border-orange-600 rounded-xl relative shadow-[var(--shadow-xl)]']) !!}>
    @if($link)
        <a class="absolute z-2 inset-0" title="{{ $title }}" href="{{ $href }}">
            <span>{{ __('dashboard.see_animal_profile') }}</span>
        </a>
    @endif
    <div>
        <div class="relative">
            <x-admin.dashboard.cards.card_img :src="$src" :src_db="$src_db" :src_storage="$src_storage" :alt="$alt" :name="$name" />
        </div>
        <div class="flex gap-4 absolute right-2 top-55">
            <x-admin.button_action
                title="{{ __('dashboard.see_profile') }}"
                :href="$href_see"
                :src="asset('assets/img/icones/eye.svg')"
                alt="{{ __('dashboard.eye_icon_alt') }}"
            />
            <x-admin.button_action
                :href="$href_button"
                title="{{ __('dashboard.edit_animal') }}"
                :src="asset('assets/img/icones/modify.svg')"
                alt="{{ __('dashboard.edit_icon_alt') }}"
            />
            <x-admin.modal.button_action
                wire:click="toggleModal('delete', {{$animal_id}})"
                title="{{ __('dashboard.delete_animal') }}"
                :src="asset('assets/img/icones/delete.svg')"
                alt="{{ __('dashboard.delete_icon_alt') }}"
            />
        </div>
        <div class="pt-4 pb-3 px-5">
            <x-admin.dashboard.cards.card_definition :definitions="$definitions" :dd="$dd"/>
        </div>
    </div>
</article>
