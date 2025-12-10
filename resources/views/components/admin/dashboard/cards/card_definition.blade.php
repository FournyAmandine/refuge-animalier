@props(['definitions', 'dd'=>[]])

<dl class="flex flex-col gap-4 pb-5 text-black/70">
    @foreach($definitions as $index => $definition)
        <x-admin.dashboard.cards.definition :dt="$definition['dt']" :dd=" $dd[$index] ?? '' "/>
    @endforeach
</dl>
