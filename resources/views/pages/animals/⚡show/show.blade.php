@php
    use Carbon\Carbon;
@endphp

<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Animaux/{!! $animal->name !!}" title="Fiche de {!! $animal->name !!}"/>
    <section class="m-4 p-4 min-[1400px]:mx-20 min-[1700px]:mx-30 md:p-8 bg-orange-50/7 [box-shadow:var(--shadow-xl)] rounded-xl md:flex animal md:gap-3 lg:flex-col xl:flex-row xl:gap-10 min-[1920px]:max-w-[1280px]  min-[1920px]:m-auto">
        <div class="w-1/1 h-1/2 xl:w-1/2">
            <img class="rounded-xl w-1/1" src="{!! asset($animal->img_path) !!}" alt="Image d'un chien border collie noir et blanc">
        </div>
        <dl class="pt-8 pl-1 flex flex-wrap gap-5 md:max-w-xs md:pt-0 lg:max-w-none xl:max-w-xs 2xl:max-w-none min-[1400px]:max-w-none min-[1400px]:flex-1">
            <x-admin.dashboard.cards.definition class="w-90" dt="Type&nbsp;:" dd="{!! $animal->type !!}"/>
            <x-admin.dashboard.cards.definition class="w-90" dt="Race&nbsp;:" dd="{!! $animal->race?? '/' !!}"/>
            <x-admin.dashboard.cards.definition class="w-90" dt="Sexe&nbsp;:" dd="{!! $animal->sexe !!}"/>
            <x-admin.dashboard.cards.definition class="w-90" dt="Âge&nbsp;:" dd="{{ \Carbon\Carbon::parse($animal->birth_date)->age }} ans"/>
            <x-admin.dashboard.cards.definition class="w-90" dt="Date d'arrivée&nbsp;:" dd="{{ Carbon::parse($animal->arrival_date) ->locale('fr')->translatedFormat('d F Y') }}"/>
            <x-admin.dashboard.cards.definition class="w-90" dt="Statut&nbsp;:" dd="{!! $animal->state !!}"/>
            <x-admin.dashboard.cards.definition class="w-90" dt="Pelage&nbsp;:" dd="{!! $animal->coat !!}"/>
            <x-admin.dashboard.cards.definition class="w-90" dt="Vaccins&nbsp;:" dd="{!! $animal->vaccines !!}"/>
            <x-admin.dashboard.cards.definition class="flex-wrap w-90" dt="Caractère&nbsp;:" dd="{!! $animal->description !!}"/>
            <x-admin.dashboard.cards.definition class="flex-wrap w-full" dt="Note sur l’adoptant&nbsp;:" dd="{!! $this->animal->petowner_description !!}"/>
        </dl>
    </section>
    <div class="pt-4 flex flex-col sm:flex-row gap-2 lg:justify-end px-4 min-[1400px]:px-20 min-[1700px]:px-30 min-[1920px]:max-w-[1280px] min-[1920px]:px-0 min-[1920px]:m-auto">
        <x-admin.button class="w-1/1 text-center modify lg:w-1/3 2xl:w-1/5" href="{!! route('admin.animals.edit',$animal->id) !!}" label="Modifier" title="Aller vers la page de modification de l'animal"/>
        <x-admin.button wire:click="delete({!! $this->animal->id !!})" class="w-1/1 text-center delete lg:w-1/3 2xl:w-1/5" href="#" label="Supprimer" title="Supprimer votre animal"/>
    </div>
</main>
