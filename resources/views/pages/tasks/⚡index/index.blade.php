<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Tâches" title="Vos tâches"/>
    <div class="flex justify-end px-25">
        <x-admin.button href="#" label="Ajouter une tâche" title="Ajouter une nouvelle tâche" class="px-6"/>

    </div>
    <section>
        <h3 class="title_section pb-5 lg:text-2xl">À réaliser</h3>
        <x-admin.tasks.article_card label="Valider la fiche de Charly" day="3"/>
        <x-admin.tasks.article_card label="Valider la fiche de Charly" day="3"/>
        <x-admin.tasks.article_card label="Valider la fiche de Charly" day="3"/>
    </section>
    <section class="pt-15">
        <h3 class="title_section pb-5 lg:text-2xl">Dejà réalisées</h3>
        <x-admin.tasks.article_card checked="checked" label="Valider la fiche de Charly" day="3"/>
        <x-admin.tasks.article_card checked="checked" label="Valider la fiche de Charly" day="3"/>
        <x-admin.tasks.article_card checked="checked" label="Valider la fiche de Charly" day="3"/>
    </section>
</main>
