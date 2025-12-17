@php
    use Carbon\Carbon;
@endphp

<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Bénévoles/{!! $volunteer->first_name !!}"
                            title="Fiche de {!! $volunteer->first_name !!}"/>
    <section
        class="m-4 p-4 lg:mx-10 min-[1700px]:mx-30 md:p-8 bg-orange-50/7 [box-shadow:var(--shadow-xl)] rounded-xl md:flex animal md:gap-3 xl:flex-row xl:gap-10 min-[1920px]:max-w-[1280px] min-[1920px]:m-auto lg:flex-col">
        <h3 class="sro">{!! $volunteer->first_name !!} {!! $volunteer->last_name !!}</h3>
        <div class="flex flex-row flex-wrap gap-5 flex-1">
            <div class="">
                <div class="flex pb-5 flex-row flex-wrap flex-1">
                    <div class="max-w-[240px] xl:max-w-1/3">
                        <img class="rounded-xl w-1/1" src="{!! asset($volunteer->profil_path) !!}"
                             alt="Image de votre bénévole">
                    </div>
                    <dl class="border-l-2 border-orange-600 pt-8 pl-6 flex flex-wrap gap-5  md:pt-0 lg:max-w-md xl:max-w-md">
                        <x-admin.dashboard.volunteers.definition class="w-[300px]" dt="Nom&nbsp;:" dd="{!! $volunteer->last_name !!}"/>
                        <x-admin.dashboard.volunteers.definition class="w-[300px]" dt="Prénom&nbsp;:"
                                                                 dd="{!! $volunteer->first_name !!}"/>
                        <x-admin.dashboard.volunteers.definition class="w-[300px]" dt="Âge&nbsp;:"
                                                                 dd="{!! Carbon::parse($volunteer->birth_date)->age !!} ans"/>
                        <x-admin.dashboard.volunteers.definition class="w-[300px]" dt="Téléphone&nbsp;:"
                                                                 dd="{!! $volunteer->telephone !!}"/>
                        <x-admin.dashboard.volunteers.definition dt="Email&nbsp;:" dd="{!! $volunteer->email !!}"/>
                    </dl>
                </div>
                <dl class="pt-8 border-t-2 border-orange-600 flex flex-wrap">
                    <x-admin.dashboard.volunteers.definition dt="Lien avec les animaux&nbsp;:"
                                                             dd="{!! $volunteer->link_animal !!}"/>
                </dl>
            </div>
            <div class="min-[1505px]:pl-4 flex-1 ">
                <p>Disponibilités&nbsp;:</p>
                <table class="rounded-xl overflow-hidden w-full [box-shadow:var(--shadow-xl)] mt-3 border-collapse border-orange-600">
                    <thead>
                    <tr class="border-b border-orange-600">
                        <th class="border-r border-orange-600 px-4 py-2 rounded-l-lg">Jour</th>
                        <th class="border-r border-orange-600 px-4 py-2">Début</th>
                        <th class="px-4 py-2 rounded-r-lg">Fin</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($availabilities as $availability)
                        <tr class="text-center">
                            <td class="border-r border-orange-600 py-2.5">
                                {!! $availability->day !!}
                            </td>
                            <td class="border-r border-orange-600 py-2.5">
                                {!! $availability->start !!}
                            </td>
                            <td>
                                {!! $availability->end !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div
        class="pt-4 flex flex-col sm:flex-row gap-2 lg:justify-end px-4 lg:px-10 min-[1700px]:px-30 min-[1920px]:max-w-[1280px] min-[1920px]:px-0 min-[1920px]:m-auto">
        <x-admin.button class="w-1/1 text-center modify lg:w-1/3 2xl:w-1/5"
                        href="{!! route('admin.volunteers.edit',$volunteer->id) !!}" label="Modifier"
                        title="Aller vers la page de modification du bénévole"/>
        <x-admin.button wire:click="delete({!! $volunteer->id !!})"
                        class="w-1/1 text-center delete lg:w-1/3 2xl:w-1/5" href="#" label="Supprimer"
                        title="Supprimer votre bénévole"/>
    </div>
</main>
