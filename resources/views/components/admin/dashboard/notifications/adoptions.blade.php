@props(['adoptions'])

<div class="border rounded-xl border-orange-600 [box-shadow:var(--shadow-xl)] p-5 todo mb-8 md:w-[48%] lg:w-1/1 xl:w-[48%] 2xl:w-[32%]">
    <div class="flex items-start gap-2">
        <h3 class="title_section text-2xl font-medium underline decoration-orange-400 decoration-2 pb-4">Demandes d'adoption</h3>
        <img src="{!! asset('assets/img/small_paw.svg') !!}" alt="Petite patte de chat orange">
    </div>
    @foreach($adoptions as $adoption)
        <x-admin.dashboard.article_message_card day="{!! \Carbon\Carbon::parse($adoption->created_at)->day !!}" animal="{!! $adoption->animal->name !!}" contact="{!! $adoption->first_name !!} {!! $adoption->last_name !!}" message="Souhaite adopter"/>
    @endforeach
    <div class="flex flex-col items-center">
        <x-admin.button href="{!! route('admin.adoptions.index') !!}" title="Aller voir toutes les demandes" label="Voir les demandes" class="w-1/1 text-center"/>
    </div>
</div>
