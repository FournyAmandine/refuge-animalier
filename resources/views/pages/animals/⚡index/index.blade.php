<main class="lg:flex-1 bg-orange-50/30">
        <x-admin.sections.intro ariane="Animaux" title="Vos animaux"/>
        <x-admin.sections.filter href="{!! route('admin.animals.create') !!}" title_button="Aller vers la page pour ajouter un animal" label="Ajouter un animal" title_page="Page d'index des animaux"/>
        <x-admin.sections.animals_cards_table :animals="$animals"/>
    <div class="p-10 md:p-25">
        {!! $animals->links() !!}
    </div>
</main>
