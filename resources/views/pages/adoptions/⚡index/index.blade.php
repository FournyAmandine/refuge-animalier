<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Adoptions" title="Vos demandes d'adoption"/>
    <section>
        <h3 class="title_section pb-5 lg:text-2xl">Non-validées</h3>
        <x-admin.adoptions.article_card message="Bonjour, je voudrais voir Moka..." name="Sarah Deseurs" day="3" email="sarahdeseurs@gmail.com" class="border-red-600" label="Valider"/>
        <x-admin.adoptions.article_card message="Bonjour, je voudrais voir Moka..." name="Sarah Deseurs" day="3" email="sarahdeseurs@gmail.com" class="border-red-600" label="Valider"/>
        <x-admin.adoptions.article_card message="Bonjour, je voudrais voir Moka..." name="Sarah Deseurs" day="3" email="sarahdeseurs@gmail.com" class="border-red-600" label="Valider"/>
    </section>
    <section class="pt-15">
        <h3 class="title_section pb-5 lg:text-2xl">Validées</h3>
        <x-admin.adoptions.article_card message="Bonjour, je voudrais voir Moka..." name="Sarah Deseurs" day="3" class="border-green-600" label="Annuler la validation"/>
        <x-admin.adoptions.article_card message="Bonjour, je voudrais voir Moka..." name="Sarah Deseurs" day="3" class="border-green-600" label="Annuler la validation"/>
        <x-admin.adoptions.article_card message="Bonjour, je voudrais voir Moka..." name="Sarah Deseurs" day="3" class="border-green-600" label="Annuler la validation"/>
    </section>
</main>
