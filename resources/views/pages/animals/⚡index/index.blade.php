@php
    use Livewire\WithFileUploads;
@endphp

<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro
        ariane="{{ __('animal_index.animals') }}"
        title="{{ __('animal_index.your_animals') }}"
    />

    <x-admin.sections.filter
        href="{!! route('admin.animals.create') !!}"
        title_button="{{ __('animal_index.go_to_add_page') }}"
        label="{{ __('animal_index.add_animal') }}"
        title_page="{{ __('animal_index.index_page') }}"
    />

    <x-admin.sections.animals_cards_table :animals="$animals"/>

    <div class="p-10 md:p-25">
        {!! $animals->links() !!}
    </div>

    @if($isOpenDeleteModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'delete' })">
            <x-slot:title>
                {{ __('animal_index.confirm_delete', ['name' => $chosenAnimal->name]) }}
            </x-slot:title>
            <x-slot:content>
                <div class="flex gap-5 justify-center items-center">
                    <button
                        class="p-4 bg-orange-600 text-orange-50 rounded-xl hover:scale-110 hover:transition-all hover:duration-200"
                        wire:click="delete()">
                        {{ __('animal_index.delete') }}
                    </button>

                    <button class="hover:text-orange-600 hover:text-xl hover:duration-200"
                            wire:click="toggleModal('delete')">
                        {{ __('animal_index.back') }}
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif
</main>
