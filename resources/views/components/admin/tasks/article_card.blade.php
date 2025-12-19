@props(['label', 'day', 'checked'=>'', 'id', 'done', 'field_name'])


<article {!! $attributes->merge(['class'=>'flex flex-wrap items-end justify-between border-2  rounded-lg pb-5 pt-3 px-10 [box-shadow:var(--shadow-xl)] mb-5 min-[1920px]:max-w-[64rem] tasks']) !!}>
    <h4 class="sro">{!! $label !!}</h4>
    <div class="{!! $class_div ?? 'flex items-center gap-2' !!}">
        <input
            type="checkbox"
            class="w-5 h-5"
            {{ $done ? 'checked' : '' }}
            wire:click="toggleDoneTask({{ $id }})"
            name="{!! $field_name !!}"
            id="{!! $field_name !!}"
        >
        <label class="{!! $class_label ?? 'lg:text-xl font-medium' !!}" for="{!! $field_name !!}">{!! $label !!}</label>
    </div>

    <div class="flex gap-14 items-end">
        <p class="text-sm">Il y a {!! $day !!} jours</p>
        <div x-data="{open: false}">
            <button class="text-orange-600 text-3xl text-center" @click="open = !open" @click.outside="open = false" data-test="tasks-index-menu">
                ...
            </button>
            <span x-show="open"
                  class="absolute z-30 right-8 bg-orange-50 p-5 rounded-2xl text-xl flex flex-col gap-3 menu border-2 border-orange-600 [box-shadow:var(--shadow-xl)]">
                <div class="border-b-3 border-orange-600 pb-3 text-center">
                     <button wire:click="toggleModal('edit', {{$id}})" class="p-2 hover:bg-orange-100/40 text-center rounded-lg" href="">Modifier</button>
                </div>
                <button class="hover:bg-orange-100/40 p-2 rounded-lg" href="#" wire:click="toggleModal('delete', {{$id}})">Supprimer</button>
            </span>

        </div>
    </div>

</article>
