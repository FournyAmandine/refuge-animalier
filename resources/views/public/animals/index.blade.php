<x-public.app>
    <x-slot:title_page>
        {{ __('public_animals_index.title_page') }}
    </x-slot:title_page>

    <main>
        <x-public.sections.intro
            title="{{ __('public_animals_index.intro_title') }}"
            ariane="{{ __('public_animals_index.breadcrumb') }}"
        />

        <x-public.sections.search/>

        <x-public.sections.card-list
            :animals="$animals"
            class_title="sro"
            class="md:flex-row md:flex-wrap md:justify-center"
        />

        <div class="p-10 md:p-25">
            {!! $animals->links() !!}
        </div>
    </main>
</x-public.app>
