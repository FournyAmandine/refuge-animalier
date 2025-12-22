<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Bénévoles" title="Vos bénévoles"/>
    <x-admin.sections.filter href="{!! route('admin.volunteers.create') !!}"
                             title_button="Aller vers la page pour ajouter un bénévole" label="Ajouter un bénévole"
                             title_page="Page d'index des bénévoles"/>
    <x-admin.sections.volunteers_cards_table :volunteers="$volunteers"/>
    <div class="p-10 md:p-25">
        {!! $volunteers->links() !!}
    </div>
    @if($isOpenDeleteModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'delete' })">
            <x-slot:title>
                Voulez vous vraiment supprimer&nbsp;: <span
                    class="menu underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold text-xl">{{$chosenVolunteer->first_name}} {{$chosenVolunteer->last_name}}</span>?
            </x-slot:title>
            <x-slot:content>
                <div class="flex gap-5 justify-center items-center">
                    <button
                        class="p-4 bg-orange-600 text-orange-50 rounded-xl hover:scale-110 hover:transition-all hover:duration-200"
                        wire:click="delete()">
                        Supprimer
                    </button>

                    <button class="hover:text-orange-600 hover:text-xl hover:duration-200"
                            wire:click="toggleModal('delete')">
                        Retour
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif
</main>

