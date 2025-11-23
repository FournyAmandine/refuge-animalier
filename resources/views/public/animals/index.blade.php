<x-public.app>
    <x-slot:title_page>
        Nos compagnons
    </x-slot:title_page>
    <main>
        <span class="ariane pl-5 text-sm text-orange-600 font-semibold italic pb-5">Compagnons</span>
        <h2 class="p-5 [font-size:var(--text-3xl)] text-orange-600 underline decoration-orange-400 decoration-3 text-center">
            Découvrez nos petits compagnons</h2>
        <x-public.sections.search/>
        <x-public.sections.card-list :animals="$animals"/>
        <div class="p-10">
            {!! $animals->links() !!}
        </div>
    </main>
</x-public.app>
