@props(['dd' => [], 'alt', 'src', 'name', 'title', 'href', 'id', 'link'=>true, 'src_storage', 'src_db'])

@php
    $definitions = [
        ['dt'=> __('dashboard.age') . '&nbsp;:'],
        ['dt'=> __('dashboard.arrival') . '&nbsp;:'],
    ];
@endphp

<article class="bg-orange-50 border-2 border-orange-600 w-[340px] rounded-xl relative shadow-[var(--shadow-xl)]">
    @if($link)
        <a class="absolute z-2 inset-0" title="{{ $title }}" href="{{ $href }}">
            <span>{{ __('dashboard.see_volunteer_profile') }}</span>
        </a>
    @endif
    <div>
        <div class="relative">
            <x-admin.dashboard.volunteers.card_img :src="$src" :src_storage="$src_storage" :src_db="$src_db" :alt="$alt" :name="$name" />
        </div>
        <div class="flex gap-4 absolute right-2 top-85">
            <x-admin.button_action
                title="{{ __('dashboard.see_profile') }}"
                href="{!! route('admin.volunteers.show', $id) !!}"
                :src="asset('assets/img/icones/eye.svg')"
                alt="{{ __('dashboard.eye_icon_alt') }}"
            />
            <x-admin.button_action
                title="{{ __('dashboard.edit_profile') }}"
                href="{!! route('admin.volunteers.edit', $id) !!}"
                :src="asset('assets/img/icones/modify.svg')"
                alt="{{ __('dashboard.edit_icon_alt') }}"
            />
            <x-admin.modal.button_action
                wire:click="toggleModal('delete', {{$id}})"
                title="{{ __('dashboard.delete_profile') }}"
                href="#"
                :src="asset('assets/img/icones/delete.svg')"
                alt="{{ __('dashboard.delete_icon_alt') }}"
            />
        </div>
        <div class="pt-4 pb-3 px-5">
            <x-admin.dashboard.volunteers.card_definition :definitions="$definitions" :dd="$dd"/>
        </div>
    </div>
</article>
