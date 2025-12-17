@props(['name', 'animal', 'day', 'label'])


<article {!! $attributes->merge(['class'=>'relative hover:scale-105 hover:duration-200 hover:transition-all flex flex-wrap justify-between items-center border-2  rounded-lg p-2.5 [box-shadow:var(--shadow-xl)] mb-5 min-[1920px]:max-w-[64rem]']) !!}>
    <a class="absolute inset-0" href="#" title="Voir la demande d'adoption"></a>
    <div class="pb-2.5">
        <h4 class="lg:text-xl">{!! $name !!}</h4>
        <p class="text-sm">Souhaite adopter {!! $animal !!}</p>
    </div>
    <p class="text-sm">Il y a {!! $day !!} jours</p>
    <x-admin.button href="#" title="Valider la demande d'adoption pour {!! $name !!}" label="{!! $label !!}" class="pr-3 pl-15 validate"/>
</article>
