@php
    use Carbon\Carbon;
@endphp

<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Animaux/{!! $animal->name !!}" title="Fiche de {!! $animal->name !!}"/>
    <section class="m-4 p-4 min-[1400px]:mx-20 min-[1700px]:mx-30 md:p-8 bg-orange-50/7 [box-shadow:var(--shadow-xl)] rounded-xl md:flex animal md:gap-3 lg:flex-col xl:flex-row xl:gap-10 min-[1920px]:max-w-[1280px]  min-[1920px]:m-auto">
        <h3 class="sro">{!! $animal->name !!}</h3>
        @if(\Illuminate\Support\Str::startsWith($animal->img_path, 'assets/img/'))
            <img class="rounded-xl w-[315px] h-[315px] sm:w-[440px] sm:h-[440px] object-cover" src="{!! asset($animal->img_path) !!}" alt="Image de notre compagnon {!! $animal->name !!}" width="550" height="550">
        @else
            <img class="rounded-xl w-[300px] h-[300px] sm:w-[440px] sm:h-[440px] object-cover" src="{!! asset('storage/photos/animals/originals/'.$animal->img_path) !!}" alt="Image de notre compagnon {!! $animal->name !!}" width="550" height="550">
        @endif
        <dl class="pt-8 pl-1 flex flex-wrap gap-5 md:max-w-xs md:pt-0 lg:max-w-none xl:max-w-xs 2xl:max-w-none min-[1400px]:max-w-none min-[1400px]:flex-1">
            <x-admin.dashboard.cards.definition class="w-90" dt="Type&nbsp;:" dd="{!! $animal->type !!}"/>
            @if($animal->race)
                <x-admin.dashboard.cards.definition class="w-90" dt="Race&nbsp;:" dd="{!! $animal->race !!}"/>
            @endif
            <x-admin.dashboard.cards.definition class="w-90" dt="Sexe&nbsp;:" dd="{!! $animal->sexe !!}"/>
            <x-admin.dashboard.cards.definition class="w-90" dt="Âge&nbsp;:" dd="{{ Carbon::parse($animal->birth_date)->age }} ans"/>
            <x-admin.dashboard.cards.definition class="w-90" dt="Date d'arrivée&nbsp;:" dd="{{ Carbon::parse($animal->created_at) ->locale('fr')->translatedFormat('d F Y') }}"/>
            <x-admin.dashboard.cards.definition class="w-90" dt="Statut&nbsp;:" dd="{{ $this->enumNameToValue($animal->state) }}"/>
            <x-admin.dashboard.cards.definition class="w-90" dt="Pelage&nbsp;:" dd="{!! $animal->coat !!}"/>
            @if($animal->vaccines)
            <x-admin.dashboard.cards.definition class="w-90" dt="Vaccins&nbsp;:" dd="{!! $animal->vaccines !!}"/>
            @endif
            @if($animal->description)
            <x-admin.dashboard.cards.definition class="flex-wrap w-90" dt="Caractère&nbsp;:" dd="{!! $animal->description !!}"/>
            @endif
        </dl>
    </section>
    <div class="pt-4 flex flex-col sm:flex-row gap-4 lg:justify-end px-4 min-[1400px]:px-20 min-[1700px]:px-30 min-[1920px]:max-w-[1280px] min-[1920px]:px-0 min-[1920px]:m-auto">
        <x-admin.button class="w-1/1 text-center lg:w-1/3 2xl:w-1/5" href="{!! route('admin.animals.index') !!}" label="Voir tous les animaux" title="Aller vers la page des animaux"/>
        <x-admin.button class="w-1/1 text-center modify lg:w-1/3 2xl:w-1/5" href="{!! route('admin.animals.edit',$animal->id) !!}" label="Modifier" title="Aller vers la page de modification de l'animal"/>
        <x-admin.modal.button wire:click="toggleModal('delete', {!! $animal->id !!})" class="w-1/1 text-center delete lg:w-1/3 2xl:w-1/5" label="Supprimer" title="Supprimer votre animal"/>
    </div>
    <section class="animal m-4 min-[1400px]:mx-20 min-[1700px]:mx-30 pt-30 min-[1920px]:m-auto min-[1920px]:max-w-[1280px]">
        <div class="flex justify-between mb-4 items-center">
            <h3 class="ml-4 text-2xl text-orange-600">Notes de visite</h3>
            <x-admin.modal.button wire:click="toggleModal('note')" class="text-center w-1/4 2xl:w-1/5" label="Ajouter une note" title="Ajouter une note de visite"/>
        </div>
        <div class="flex flex-wrap gap-4">
            @foreach($animal->notes as $note)
                <article class="bg-orange-50/7 [box-shadow:var(--shadow-xl)] rounded-xl p-5 sm:w-[49%]">
                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xl">{!! $note->note_name !!}</p>
                                <p>{!! Carbon::parse($note->visit_date)->locale('fr')->translatedFormat('d F Y') !!}</p>
                            </div>
                            <div class="flex gap-2">
                                <x-admin.modal.button_action wire:click="toggleModal('modify', {!! $note->id !!})" src="{!! asset('assets/img/icones/modify.svg') !!}" alt="Modifier la note" title="Modifier la note"/>
                                <x-admin.modal.button_action wire:click="toggleModal('delete_note', {!! $note->id !!})" src="{!! asset('assets/img/icones/delete.svg') !!}" alt="Supprimer la note" title="Supprimer la note"/>
                            </div>
                        </div>
                        <p>{!! $note->content !!}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    @if($isOpenNoteDeleteModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'delete_note' })">
            <x-slot:title>
                Voulez vous vraiment supprimer la note pour&nbsp;: <span
                    class="menu underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold text-xl">{{$chosenNote->note_name}}</span>?
            </x-slot:title>
            <x-slot:content>
                <div class="flex gap-5 justify-center items-center">
                    <button
                        class="p-4 bg-orange-600 text-orange-50 rounded-xl hover:scale-110 hover:transition-all hover:duration-200"
                        wire:click="delete_note()">
                        Supprimer
                    </button>

                    <button class="hover:text-orange-600 hover:text-xl hover:duration-200"
                            wire:click="toggleModal('delete_note')">
                        Retour
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif
    @if($isOpenDeleteModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'delete' })">
            <x-slot:title>
                Voulez vous vraiment supprimer&nbsp;: <span
                    class="menu underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold text-xl">{{$chosenAnimal->name}}</span>?
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
    @if($isOpenNoteModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'note' })" class="lg:text-2xl pb-10 text-orange-600 underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold ">>
            <x-slot:title>
                Créer une note de visite
            </x-slot:title>
            <x-slot:content>
                <div class="flex justify-center flex-col">
                    <form method="post" wire:submit.prevent="store" class="flex flex-col gap-5">
                        @csrf
                        <x-admin.form.fields.input field_name="note_name" wire:model="note_form.note_name"
                                                   placeholder="Jean Servais" :required="true"
                                                   label="Entrez le nom du visiteur"/>
                        <x-admin.form.fields.input type="date" field_name="note_date" wire:model="note_form.visit_date" :required="true"
                                                   label="Entrez la date de visite"/>
                        <x-admin.form.fields.textarea field_name="note_content" wire:model="note_form.content" placeholder="La visite était vraiment bien..." :required="true" label="Décrivez comment s'est passée la visite"/>
                        <x-admin.form.buttons.button
                            class="text-orange-50 lg:text-xl bg-orange-600 border-2 rounded-lg px-10 py-2 w-1/1 hover:scale-110 duration-300 transition-all"
                            text="Ajouter la note"/>
                    </form>
                    <button
                        class="pt-4 hover:text-orange-600 hover:text-xl hover:duration-200 text-center underline decoration-orange-400 decoration-2"
                        wire:click="toggleModal('note')">Annuler
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif
    @if($isOpenNoteModifyModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'modify' })" class="lg:text-2xl pb-10 text-orange-600 underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold ">>
            <x-slot:title>
                Modifiez la note de visite
            </x-slot:title>
            <x-slot:content>
                <div class="flex justify-center flex-col">
                    <form method="post" wire:submit.prevent="save" class="flex flex-col gap-5">
                        @csrf
                        <x-admin.form.fields.input field_name="note_name" wire:model="note_form.note_name"
                                                   placeholder="Jean macqueen" :required="true"
                                                   label="Entrez le nom du visiteur"/>
                        <x-admin.form.fields.input type="date" field_name="note_date" wire:model="note_form.visit_date" :required="true"
                                                   label="Entrez la date de visite"/>
                        <x-admin.form.fields.textarea field_name="note_content" wire:model="note_form.content" placeholder="La visite était vraiment bien..." :required="true" label="Décrivez comment s'est passée la visite"/>
                        <x-admin.form.buttons.button
                            class="text-orange-50 lg:text-xl bg-orange-600 border-2 rounded-lg px-10 py-2 w-1/1 hover:scale-110 duration-300 transition-all"
                            text="Modifier la note"/>
                    </form>
                    <button
                        class="pt-4 hover:text-orange-600 hover:text-xl hover:duration-200 text-center underline decoration-orange-400 decoration-2"
                        wire:click="toggleModal('modify')">Annuler
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif
</main>
