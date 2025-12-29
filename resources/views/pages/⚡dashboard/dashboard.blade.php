<main class="admin lg:flex-1 bg-orange-50/30">
    <h2 class="pt-10 pb-5 [font-size:var(--text-3xl)] md:[font-size:var(--text-4xl)] lg:[font-size:var(--text-6xl)] text-orange-600 text-center underline decoration-orange-400 decoration-3">Les pattes heureuses</h2>
    <div class="flex justify-end pr-15 xl:pr-50 relative">
        <x-admin.modal.button_action class="pb-15" wire:click="toggleModal('notif')" src="{!! asset('assets/img/icones/notification.svg') !!}" alt="Voir les notifications" title="Voir les notifications"/>
        <span class="number text-orange-50 bg-red-600 p-y-1 px-2 absolute rounded-4xl top-0 right-13 xl:right-48">{!! $notifications->count() !!}</span>
    </div>
    <section class="md:flex md:flex-wrap gap-4">
        <h3 class="sro">A faire</h3>
        <x-admin.dashboard.notifications.adoptions :adoptions="$adoptions"/>
        <x-admin.dashboard.notifications.messages :messages="$contact_messages" title="Vos messages de contact"/>
        <x-admin.dashboard.notifications.messages :messages="$volunteer_messages" title="Vos messages de bénévole"/>
        <x-admin.dashboard.notifications.tasks :tasks="$tasks"/>
    </section>
    <x-admin.sections.stats_cards :welcome="$welcome" :adopted="$adopted" :in="$in" :care="$care" :pending="$pending" :draft="$draft"/>
    <section class="pt-30">
        <h3 class="title_section text-xl md:text-2xl font-medium underline decoration-orange-400 decoration-2 pb-2.5">
            Vos derniers arrivants</h3>
        <div class="pb-5 flex flex-wrap gap-x-28 gap-y-5 items-center slider">
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
                                              :dd="[$animal->sexe, \Carbon\Carbon::parse($animal->birth_date)->age . ' ans', $animal->race, $animal->state, \Carbon\Carbon::parse($animal->created_at)->locale('fr')->translatedFormat('d F Y')]" href="{!! route('admin.animals.show', $animal->id) !!}"
                                              title="Voir la fiche de {!! $animal->name !!}" class="w-[348px]"/>
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
        <div class="pb-5 flex flex-wrap gap-x-30 gap-y-5 items-center slider">
            @foreach($volunteers as $volunteer)
                <x-admin.dashboard.volunteers.card
                    src_db="{!! asset($volunteer->profil_path) !!}"
                    src="{!! $volunteer->profil_path !!}"
                    src_storage="{!! asset('storage/photos/volunteers/originals/'.$volunteer->profil_path) !!}"
                    id="{!! $volunteer->id !!}"
                    alt="Photo de {!! $volunteer->first_name !!}"
                    name="{!! $volunteer->first_name !!} {!! $volunteer->last_name !!}"
                    href="#"
                    :dd="[\Carbon\Carbon::parse($volunteer->birth_date)->age.' ans', \Carbon\Carbon::parse($volunteer->created_at)->locale('fr')->translatedFormat('d F Y')]"
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
    @if($isOpenShowModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'notif' })"
                               class="lg:text-2xl text-center text-orange-600 underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold">
            <x-slot:title>
              Vos notifications
            </x-slot:title>
            <x-slot:content>
                @foreach($notifications as $notification)
                    <div>
                        <a class="pt-10 inline-block border-b-2 border-orange-500 text-xl" href="{!! $notification->data['route'] !!}">{!! $notification->data['message'] !!}</a>
                    </div>
                @endforeach
                    <div class="flex gap-5 justify-center pt-9">
                        <x-admin.modal.button wire:click="toggleModal('notif')" label="Quitter"
                                              title="Quitter les notifications" class="refuse pr-5 pl-12 lg:text-xl"/>
                    </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif
</main>
