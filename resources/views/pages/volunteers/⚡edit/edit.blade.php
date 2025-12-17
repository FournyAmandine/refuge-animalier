<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Fiche bénévole" title="Création d’une fiche bénévole"/>
    <section>
        <form wire:submit.prevent="save" method="post" class="xl:max-w-10/12 m-auto">
            @csrf
            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    Informations générales
                </x-slot:legend>
                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input wire:model="form.last_name" field_name="volunteer_lastname" label="Entrez son nom" :required="true"
                                               placeholder="Chabroux"/>
                    <x-admin.form.fields.input wire:model="form.first_name" field_name="volunteer_firstname" label="Entrez son prénom"
                                               :required="true" placeholder="Maxime"/>
                </div>
                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input wire:model="form.birth_date" field_name="volunteer_birth" label="Entrez sa date de naissance" :required="true" type="date" placeholder="1"/>

                    <x-admin.form.fields.input wire:model="form.email" field_name="volunteer_email" label="Entrez son email" :required="true"
                                               type="email" placeholder="chabroux.maxime@gmail.com"/>
                </div>
                <div>
                    <x-admin.form.fields.input wire:model="form.telephone" field_name="volunteer_telephone" label="Entrez son téléphone" :required="true"
                                               type="tel" placeholder="0483 34 21 13"/>
                    <x-admin.form.fields.textarea wire:model="form.link_animal" field_name="volunteer_link_animal" label="Son lien avec les animaux" placeholder="Elle est douce avec les animaux"/>
                </div>
            </x-admin.form.fields.fieldset>
            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    Disponibilités
                </x-slot:legend>
                <p class="text-xl pb-2">Entrez les disponibilités</p>
                <div class="flex flex-wrap justify-between gap-y-4">
                    <x-admin.form.fields.availability label="Lundi" field_name="monday"/>
                    <x-admin.form.fields.availability label="Mardi" field_name="tuesday"/>
                    <x-admin.form.fields.availability label="Mercredi" field_name="wednesday"/>
                    <x-admin.form.fields.availability label="Jeudi" field_name="thursday"/>
                    <x-admin.form.fields.availability label="Vendredi" field_name="friday"/>
                    <x-admin.form.fields.availability label="Samedi" field_name="saturday"/>
                    <x-admin.form.fields.availability label="Dimanche" field_name="sunday"/>

                </div>

            </x-admin.form.fields.fieldset>
            <div class="flex justify-end">
                <x-admin.form.buttons.button text="Modifier la fiche"/>
            </div>
        </form>
    </section>
</main>
