@props(['name', 'message', 'day', 'email'])


<article {!! $attributes->merge(['class'=>'relative hover:scale-105 hover:duration-200 hover:transition-all flex flex-wrap justify-between items-center border-2  rounded-lg p-2.5 [box-shadow:var(--shadow-xl)] mb-5 min-[1920px]:max-w-[64rem]']) !!}>
    <a class="absolute inset-0" href="#" title="Voir le message"></a>
    <div class="pb-2.5">
        <h4>{!! $name !!}</h4>
        <p class="text-sm">{!! $message !!}</p>
    </div>
    <p class="text-sm">Il y a {!! $day !!} jours</p>
    <x-admin.button href="mailto:{!! $email !!}" title="Envoyer un mail vers le contact{!! $name !!}" label="Répondre" class="pr-3 pl-10 answer"/>
</article>
