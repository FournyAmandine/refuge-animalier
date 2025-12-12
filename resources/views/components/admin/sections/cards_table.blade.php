@props(['animals'])


<section class="pt-10">
    <h3 class="sro">
        Vos animaux</h3>
    <x-admin.table.table :animals="$animals"/>
    <div class="min-[1370px]:hidden pb-5 flex flex-col gap-5 lg:gap-10 items-center slider md:flex-row md:flex-wrap md:justify-center">
        @foreach($animals as $animal)
            <x-admin.dashboard.cards.card :link="false"
                                          animal_id="{!! $animal->id !!}"
                                          href_button="{!! route('admin.animals.edit', $animal->id) !!}"
                                          src="{!! asset($animal->img_path) !!}"
                                          alt="Photo de {!! $animal->name !!}"
                                          name="{!! $animal->name !!}"
                                          :dd="[
                                                        $animal->sexe,
                                                        \Carbon\Carbon::parse($animal->birth_date)->locale('fr')->translatedFormat('d F Y'),
                                                        $animal->race,
                                                        $animal->state,
                                                        \Carbon\Carbon::parse($animal->arrival_date)->locale('fr')->translatedFormat('d F Y')]"
                                          href="{!! route('admin.animals.show',$animal->id) !!}"
                                          title="Voir la fiche de {!! $animal->name !!}"
                                          class="w-[350px]"
            />
        @endforeach
    </div>
</section>
