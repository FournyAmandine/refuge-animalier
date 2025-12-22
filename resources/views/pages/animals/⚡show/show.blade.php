@php
    use Carbon\Carbon;
@endphp

<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Animaux/{!! $animal->name !!}" title="Fiche de {!! $animal->name !!}"/>
    <section class="m-4 p-4 min-[1400px]:mx-20 min-[1700px]:mx-30 md:p-8 bg-orange-50/7 [box-shadow:var(--shadow-xl)] rounded-xl md:flex animal md:gap-3 lg:flex-col xl:flex-row xl:gap-10 min-[1920px]:max-w-[1280px]  min-[1920px]:m-auto">
        <h3 class="sro">{!! $animal->name !!}</h3>
        @if(\Illuminate\Support\Str::startsWith($animal->img_path, 'assets/img/'))
            <img class="rounded-xl w-[440px] h-[440px] object-cover" src="{!! asset($animal->img_path) !!}" alt="Image de notre compagnon {!! $animal->name !!}" width="550" height="550">
        @else
            <img class="rounded-xl w-[440px] h-[440px] object-cover" src="{!! asset('storage/photos/animals/originals/'.$animal->img_path) !!}" alt="Image de notre compagnon {!! $animal->name !!}" width="550" height="550">
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
            <x-admin.dashboard.cards.definition class="w-90" dt="Vaccins&nbsp;:" dd="{!! $animal->vaccines !!}"/>
            <x-admin.dashboard.cards.definition class="flex-wrap w-90" dt="Caractère&nbsp;:" dd="{!! $animal->description !!}"/>
        </dl>
    </section>
    <div class="pt-4 flex flex-col sm:flex-row gap-4 lg:justify-end px-4 min-[1400px]:px-20 min-[1700px]:px-30 min-[1920px]:max-w-[1280px] min-[1920px]:px-0 min-[1920px]:m-auto">
        <x-admin.button class="w-1/1 text-center lg:w-1/3 2xl:w-1/5" href="{!! route('admin.animals.index') !!}" label="Voir tous les animaux" title="Aller vers la page de modification de l'animal"/>
        <x-admin.button class="w-1/1 text-center modify lg:w-1/3 2xl:w-1/5" href="{!! route('admin.animals.edit',$animal->id) !!}" label="Modifier" title="Aller vers la page de modification de l'animal"/>
        <x-admin.modal.button wire:click="toggleModal('delete', {!! $animal->id !!})" class="w-1/1 text-center delete lg:w-1/3 2xl:w-1/5" href="#" label="Supprimer" title="Supprimer votre animal"/>
    </div>
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
</main>
