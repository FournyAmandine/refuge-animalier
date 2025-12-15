<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Bénévoles" title="Vos bénévoles"/>
    <x-admin.sections.filter href="{!! route('admin.volunteers.create') !!}"
                             title_button="Aller vers la page pour ajouter un bénévole" label="Ajouter un bénévole"
                             title_page="Page d'index des bénévoles"/>
    <x-admin.sections.volunteers_cards_table :volunteers="$volunteers"/>
    <div class="p-10 md:p-25">
        {!! $volunteers->links() !!}
    </div>
</main>
