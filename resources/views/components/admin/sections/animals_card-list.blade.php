@props([
    /** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Animal[] */
    'class_title',
    'class_section',
    'animals'
])

<section class="{!! $class_section??'' !!}">
    <h3 class="{!! $class_title??'title_section text-xl md:text-2xl font-medium underline decoration-orange-400 decoration-2 pb-2.5' !!}">
        Vos derniers arrivants</h3>
    <div {{ $attributes->class(['pb-5 flex flex-col gap-5 lg:gap-10 items-center slider']) }}>
        @foreach($animals as $animal)
            <x-admin.dashboard.cards.card src_db="{!! asset($animal->img_path) !!}"
                                          src="{!! $animal->img_path !!}"
                                          src_storage="{!! asset('storage/photos/animals/originals/'.$animal->img_path) !!}"
                                          :link="false"
                                          href_button="{!! route('admin.animals.edit', $animal->id) !!}"
                                          animal_id="{!! $animal->id !!}"
                                          alt="Photo de {!! $animal->name !!}"
                                          name="{!! $animal->name !!}"
                                          href_see="{!! route('admin.animals.show', $animal->id) !!}"
                                          :dd="[$animal->sexe, \Carbon\Carbon::parse($animal->birth_date)->locale('fr')->translatedFormat('d F Y'), $animal->race, $animal->state, \Carbon\Carbon::parse($animal->created_at)->locale('fr')->translatedFormat('d F Y')]" href="{!! route('admin.animals.show', $animal->id) !!}"
                                          title="Voir la fiche de {!! $animal->name !!}" class="w-[349px]"/>
        @endforeach
    </div>
    <div class="flex gap-4">
        <x-admin.button class="px-2.5" label="Voir tous les animaux" title="Aller sur la page avec les animaux" href="#"/>
        <x-admin.button class="px-3.5" label="Ajouter un animal" title="Aller sur la page pour ajouter un animal" href="#"/>
    </div>
</section>
