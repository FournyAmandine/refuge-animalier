<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Adoptions" title="Vos demandes d'adoption"/>

    <section>
        <h3 class="title_section pb-5 lg:text-2xl">Non-validées</h3>
        @foreach($adoptions_non_validate as $adoption)
            <x-admin.adoptions.article_card animal="{!! $adoption->animal->name !!}" name="{!! $adoption->first_name !!} {!! $adoption->last_name !!}" day="{!! \Carbon\Carbon::parse($adoption->created_at)->day !!}" email="{!! $adoption->email !!}" class="border-red-600" label="Valider" id="{!! $adoption->id !!}"/>
        @endforeach
    </section>

    <section class="pt-20">
        <h3 class="title_section pb-5 lg:text-2xl">Validées</h3>
        @foreach($adoptions_validate as $adoption)
            <x-admin.adoptions.article_card animal="{!! $adoption->animal->name !!}" name="{!! $adoption->first_name !!} {!! $adoption->last_name !!}" day="{!! \Carbon\Carbon::parse($adoption->created_at)->day !!}" email="{!! $adoption->email !!}" class="border-green-600" label="Annuler la validation" id="{!! $adoption->id !!}"/>
        @endforeach
    </section>

    @if($isOpenShowModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'show' })"
                               class="lg:text-2xl text-left text-orange-600 underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold">
            <x-slot:title>
                Demande d'adoption de {!! $openAdoption->first_name  !!} {!! $openAdoption->last_name  !!}
            </x-slot:title>
            <x-slot:content>
                <div class="pt-5 flex gap-2 text-xl">
                    <div class="flex flex-col gap-2.5">
                        <p>{!! $openAdoption->email !!}</p>
                        <p>{!! \Carbon\Carbon::parse($openAdoption->created_at )->locale('fr')->translatedFormat('d F Y à G:i')!!}</p>
                    </div>
                    <div class="flex flex-col gap-2 border-l-2 border-orange-600 pl-2">
                        <p>{!! $openAdoption->civile_state !!}</p>
                        <p>{!! $openAdoption->street !!}, {!! $openAdoption->number !!}, {!! $openAdoption->postal_code !!} {!! $openAdoption->locality !!}</p>
                    </div>
                </div>
                <p class="pt-5">{!! $openAdoption->description_place !!}</p>
                <div class="flex gap-2 pt-5 pb-6">
                    <p class="text-xl">Souhaite adopté&nbsp;: {!! $openAdoption->animal->name !!}</p>
                    <img src="{!! asset('assets/img/small_paw.svg') !!}" alt="Petite patte de chat orange">
                    <p class="text-xl">{!! $openAdoption->animal->type !!}</p>
                    <img src="{!! asset('assets/img/small_paw.svg') !!}" alt="Petite patte de chat orange">
                    <p class="text-xl">{!! \Carbon\Carbon::parse($openAdoption->animal->birth_date)->age.' ans' !!}</p>
                </div>
                <p class="border-t-2 border-orange-600 pt-3 text-sm">La validation ou le refus de l’adoption envoye une notification à l’adoptant</p>
                <div class="flex gap-5 justify-end pt-9">
                    <x-admin.modal.button wire:click="toggleModal('show')" label="Refuser" title="Refuser la demande d'adoption" class="refuse pr-5 pl-12 lg:text-xl"/>
                    <x-admin.modal.button wire:click="markValidate()" label="Valider" title="Refuser la demande d'adoption" class="validate pr-5 pl-16 lg:text-xl"/>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif


</main>
