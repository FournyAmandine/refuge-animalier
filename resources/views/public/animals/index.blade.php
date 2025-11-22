<x-public.app>
    <x-slot:title_page>
        Nos compagnons
    </x-slot:title_page>
    <main>
        <span class="ariane pl-5 text-sm text-orange-600 font-semibold italic pb-5">Compagnons</span>
        <h2 class="p-5 [font-size:var(--text-3xl)] text-orange-600 underline decoration-orange-400 decoration-3 text-center">Découvrez nos petits compagnons</h2>
       <x-public.sections.search/>
        <section class="pt-10 flex flex-col gap-10 items-center">
            @foreach($animals as $animal)
                <x-public.cards.card src="{!! $animal->img_path !!}"
                                     alt="Photo de {!! $animal->name !!}"
                                     title="{!! $animal->name !!}"
                                     href="#"
                                     name="{!! $animal->name !!}" :dd="[$animal->sexe,$animal->age . 'ans',$animal->race]"/>
            @endforeach
        </section>
    </main>
</x-public.app>
