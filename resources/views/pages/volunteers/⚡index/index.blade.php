<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro
        ariane="{{ __('volunteer_index.breadcrumb') }}"
        title="{{ __('volunteer_index.title') }}"
    />
    <x-admin.sections.filter
        href="{!! route('admin.volunteers.create') !!}"
        title_button="{{ __('volunteer_index.add_button_title') }}"
        label="{{ __('volunteer_index.add_button_label') }}"
        title_page="{{ __('volunteer_index.page_title') }}"
    />
    <x-admin.sections.volunteers_cards_table :volunteers="$volunteers"/>
    <div class="p-10 md:p-25">
        {!! $volunteers->links() !!}
    </div>
    @if($isOpenDeleteModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'delete' })">
            <x-slot:title>
                {{ __('volunteer_index.confirm_delete') }}:
                <span class="menu underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold text-xl">
                    {{$chosenVolunteer->first_name}} {{$chosenVolunteer->last_name}}
                </span>?
            </x-slot:title>
            <x-slot:content>
                <div class="flex gap-5 justify-center items-center">
                    <button
                        class="p-4 bg-orange-600 text-orange-50 rounded-xl hover:scale-110 hover:transition-all hover:duration-200"
                        wire:click="delete()">
                        {{ __('volunteer_index.delete') }}
                    </button>

                    <button class="hover:text-orange-600 hover:text-xl hover:duration-200"
                            wire:click="toggleModal('delete')">
                        {{ __('volunteer_index.cancel') }}
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif
</main>
