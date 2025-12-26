<main class="admin lg:flex-1 bg-orange-50/30">
    <h2 class="pb-15 [font-size:var(--text-3xl)] md:[font-size:var(--text-4xl)] lg:[font-size:var(--text-6xl)] text-orange-600 text-center underline decoration-orange-400 decoration-3">Les pattes heureuses</h2>

    <section class="md:flex md:flex-wrap gap-4">
        <h3 class="sro">A faire</h3>
        <x-admin.dashboard.notifications.adoptions :adoptions="$adoptions"/>
        <x-admin.dashboard.notifications.messages :messages="$messages" />
        <x-admin.dashboard.notifications.tasks :tasks="$tasks"/>
    </section>
    <x-admin.sections.stats_cards/>
    <section class="pt-30">
        <h3 class="title_section text-xl md:text-2xl font-medium underline decoration-orange-400 decoration-2 pb-2.5">
            Vos derniers arrivants</h3>
        <div class="pb-5 flex flex-wrap gap-5 lg:gap-10 items-center justify-between slider">
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
            <x-admin.button class="px-2.5" label="Voir tous les animaux" title="Aller sur la page avec les animaux" href="{!! route('admin.animals.index') !!}"/>
            <x-admin.button class="px-3.5" label="Ajouter un animal" title="Aller sur la page pour ajouter un animal" href="{!! route('admin.animals.create') !!}"/>
        </div>
    </section>

    <section class="pt-30">
        <h3 class="title_section text-xl md:text-2xl font-medium underline decoration-orange-400 decoration-2 pb-2.5">
            Vos derniers bénévoles</h3>
        <div class="pb-5 flex flex-wrap gap-5 items-center justify-between slider">
            @foreach($volunteers as $volunteer)
                <x-admin.dashboard.volunteers.card
                    src_db="{!! asset($volunteer->profil_path) !!}"
                    src="{!! $volunteer->profil_path !!}"
                    src_storage="{!! asset('storage/photos/volunteers/originals/'.$volunteer->profil_path) !!}"
                    id="{!! $volunteer->id !!}"
                    alt="Photo de {!! $volunteer->first_name !!}"
                    name="{!! $volunteer->first_name !!} {!! $volunteer->last_name !!}"
                    href="#"
                    :dd="[\Carbon\Carbon::parse($volunteer->birth_date)->age.'ans', \Carbon\Carbon::parse($volunteer->created_at)->locale('fr')->translatedFormat('d F Y')]"
                    title="{!! $volunteer->first_name !!}"
                    :link="false"
                />
            @endforeach
        </div>
        <div class="flex gap-4">
            <x-admin.button class="px-2.5" label="Voir tous les bénévoles" title="Aller sur la page avec les bénévoles"
                            href="{!! route('admin.volunteers.index') !!}"/>
            <x-admin.button class="px-3.5" label="Ajouter un bénévole" title="Aller sur la page pour ajouter un bénévole"
                            href="{!! route('admin.volunteers.create') !!}"/>
        </div>
    </section>
</main>

{{--
<main class="admin lg:flex-1 bg-orange-50/30">
    <x-admin.sections.animals_card-list :animals="$animals" class_section="pt-30" class="grid grid-cols-[repeat(4,350px)] gap-5 overflow-x-scroll py-2.5"/>
    <x-admin.sections.volunteers_card-list :volunteers="$volunteers" class="grid grid-cols-[repeat(4,350px)] gap-5 overflow-x-scroll py-2.5"/>
</main>



--}}
