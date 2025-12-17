@props(['label', 'day', 'checked'=>''])

<article class="border-red-600 flex flex-wrap items-end justify-between border-2  rounded-lg p-5 pt-3 [box-shadow:var(--shadow-xl)] mb-5 min-[1920px]:max-w-[64rem] tasks">
    <x-admin.form.fields.input_checkbox :checked="$checked" :wire="false" label="{!! $label !!}" field_name="tasks"/>
    <p class="text-sm">Il y a {!! $day !!} jours</p>
    <div x-data="{open: false}">
        <button class="text-orange-600 text-3xl text-center" @click="open = !open" data-test="animal-index-menu">...</button>
        <span x-show="open" class="absolute bg-gray-100 p-5 rounded-2xl flex flex-col">
                            <a class="border-b-3 border-orange-50" href="">Modifier</a>
                            <a href="#" wire:click="delete()">Supprimer</a>
                        </span>

    </div>
</article>
