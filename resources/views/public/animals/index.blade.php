<x-public.app>
    <x-slot:title_page>
        Nos compagnons
    </x-slot:title_page>
    <main>
        <x-public.sections.intro title="Découvrez nos petits compagnons" ariane="Compagnons"/>
        <x-public.sections.search/>
        <x-public.sections.card-list :animals="$animals"/>
        <div class="p-10">
            {!! $animals->links() !!}
        </div>
    </main>
</x-public.app>
