@props(['volunteers'])


<section>
    <h3 class="sro">
        Vos bénévoles</h3>
    <x-admin.table.volunteers.table :volunteers="$volunteers"/>
    <div
        class="min-[1370px]:hidden pb-5 flex flex-col gap-5 lg:gap-10 items-center slider md:flex-row md:flex-wrap md:justify-center pt-8">
        @foreach($volunteers as $volunteer)
            <x-admin.dashboard.volunteers.card :link="false"
                                               id="{!! $volunteer->id !!}"
                                               title=""
                                               href=""
                                               src="{!! $volunteer->profil_path !!}"
                                               src_db="{!! asset($volunteer->profil_path) !!}"
                                               src_storage="{!! asset('storage/photos/volunteers/originals/'.$volunteer->profil_path) !!}"
                                               alt="Photo de {!! $volunteer->first_name !!}"
                                               name="{!! $volunteer->last_name !!} {!! $volunteer->first_name !!}"
                                               :dd="[\Carbon\Carbon::parse($volunteer->birth_date)->age . ' ans',  \Carbon\Carbon::parse($volunteer->created_at)->locale('fr')->translatedFormat('d F Y')]"
            />
        @endforeach
    </div>
</section>
