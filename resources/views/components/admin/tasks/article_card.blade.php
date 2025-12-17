@props(['label', 'day', 'checked'=>'', 'id', 'done', 'field_name'])


<article {!! $attributes->merge(['class'=>'flex flex-wrap items-end justify-between border-2  rounded-lg p-5 pt-3 [box-shadow:var(--shadow-xl)] mb-5 min-[1920px]:max-w-[64rem] tasks']) !!}>
    <div class="{!! $class_div ?? 'flex items-center gap-2' !!}">
        <input
            type="checkbox"
            class="w-5 h-5"
            {{ $done ? 'checked' : '' }}
            wire:click="toggleDoneTask({{ $id }})"
            name="{!! $field_name !!}"
        >
        <label class="{!! $class_label ?? 'lg:text-xl font-medium' !!}" for="{!! $field_name !!}">{!! $label !!}</label>
    </div>

    <p class="text-sm">Il y a {!! $day !!} jours</p>
    <div x-data="{open: false}">
        <button class="text-orange-600 text-3xl text-center" @click="open = !open" data-test="tasks-index-menu">...
        </button>
        <span x-show="open" class="absolute bg-gray-100 p-5 rounded-2xl flex flex-col">
                            <a class="border-b-3 border-orange-50" href="">Modifier</a>
                            <a href="#" wire:click="delete({!! $id !!})">Supprimer</a>
                        </span>

    </div>
</article>
