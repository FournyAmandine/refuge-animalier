@props(['name', 'message', 'day', 'email', 'label', 'id'])


<article {!! $attributes->merge(['class'=>'relative hover:scale-105 hover:duration-200 hover:transition-all flex flex-wrap justify-between items-center border-2 rounded-lg p-2.5 [box-shadow:var(--shadow-xl)] mb-5 min-[1920px]:max-w-[64rem]']) !!}>
    <button class="absolute inset-0" wire:click="toggleModal('show', {{$id}})" title="Voir le message"></button>
    <div class="pb-2.5 pr-2.5">
        <h4 class="lg:text-xl">{!! $name !!}</h4>
        <p class="text-sm">{!! $message !!}</p>
    </div>
    <p class="text-sm">Il y a {!! $day !!} jours</p>
    <x-admin.button wire:click="toggleReadMessage({{$id}})" href="mailto:{!! $email !!}" title="Envoyer un mail vers le contact{!! $name !!}" label="{!! $label !!}" class="pr-3 pl-10 answer"/>
</article>
