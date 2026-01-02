@props([
    'class_title',
    'volunteers'
])


<section class="pt-30">
    <h3 class="{!! $class_title??'title_section text-xl md:text-2xl font-medium underline decoration-orange-400 decoration-2 pb-2.5' !!}">
        Vos bénévoles</h3>
    <div {{ $attributes->class(['pb-5 flex flex-col gap-5 items-center slider']) }}>
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
        <x-admin.button class="px-1" label="Voir tous les bénévoles" title="Aller sur la page avec les bénévoles"
                        href="#"/>
        <x-admin.button class="px-1" label="Ajouter un bénévole" title="Aller sur la page pour ajouter un bénévole"
                        href="#"/>
    </div>
</section>
