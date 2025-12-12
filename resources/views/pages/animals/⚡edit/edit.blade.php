<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Fiche animale" title="Modifier la fiche de {!! $this->animal->name !!}"/>
    <section>
        <h3 class="sro">Formulaire de modification</h3>
        <form method="post" class="xl:max-w-10/12 m-auto" wire:submit="save">
            @csrf
            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    Informations générales
                </x-slot:legend>
                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input wire:model="form.name" field_name="animal_name" label="Entrez son nom" :required="true" placeholder="Charly"/>
                    <x-admin.form.fields.inputs_radio/>
                    <x-public.form.fields.select wire:model="form.state" field_name="animal_statut" :required="true" label="Sélectionnez le statut">
                        <x-public.form.fields.option selected="selected" value="none" option_name="--Votre choix--"/>
                        <x-public.form.fields.option value="adopted" option_name="Adopté"/>
                        <x-public.form.fields.option value="available" option_name="Disponible"/>
                        <x-public.form.fields.option value="pending" option_name="En attente d'adoption"/>
                        <x-public.form.fields.option value="care" option_name="En soin"/>
                    </x-public.form.fields.select>
                </div>
                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-public.form.fields.select wire:model="form.type" field_name="animal_type" :required="true" label="Sélectionnez le type">
                        <x-public.form.fields.option selected="selected" value="none" option_name="--Votre choix--"/>
                        <x-public.form.fields.option value="Chien" option_name="Chien"/>
                        <x-public.form.fields.option value="Lapin" option_name="Lapin"/>
                        <x-public.form.fields.option value="Chat" option_name="Chat"/>
                    </x-public.form.fields.select>
                    <x-public.form.fields.select field_name="animal_race" wire:model="form.race" label="Sélectionnez la race" disabled="disabled">
                        <x-public.form.fields.option selected="selected" value="none" option_name="--Votre choix--"/>
                        <x-public.form.fields.option value="American Staff" option_name="American Staff"/>
                        <x-public.form.fields.option value="Golden Retriever" option_name="Golden Retriever"/>
                        <x-public.form.fields.option value="Caniche" option_name="Caniche"/>
                        <x-public.form.fields.option value="Border Collie" option_name="Border Collie"/>
                    </x-public.form.fields.select>
                </div>
                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input wire:model="form.birth_date" field_name="animal_birth" label="Entrez sa date de naissance" :required="true" type="date" placeholder="1"/>
                    <x-admin.form.fields.input wire:model="form.vaccines" field_name="animal_vaccines" label="Entrez ses vaccins" placeholder="Tétanos, rage"/>
                </div>
            </x-admin.form.fields.fieldset>
            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    Description
                </x-slot:legend>
                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input wire:model="form.img_path" field_name="animal_pictures" :required="true" accept="image/png, image/jpeg" label="Choisissez une/des image(s)" type="file"/>
                    <x-admin.form.fields.input wire:model="form.coat" field_name="animal_coat" label="Entrez son pelage" :required="true" placeholder="Poils longs, blancs et noirs..."/>
                </div>
                <x-admin.form.fields.textarea wire:model="form.description" field_name="animal_description" label="Entrez une brève description" placeholder="Ce chien est un peu fou mais très amical..."/>
            </x-admin.form.fields.fieldset>
            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    L'adoptant
                </x-slot:legend>
                <x-admin.form.fields.textarea wire:model="form.petowner_description" field_name="petowner" label="Entrez une note sur l’adoptant" placeholder="Ce chien est un peu fou mais très amical..."/>
            </x-admin.form.fields.fieldset>
            <div class="flex justify-end">
                <x-admin.form.buttons.button text="Créer la fiche"/>
            </div>
        </form>
        <script>
            const typeSelect = document.getElementById('animal_type');
            const raceSelect = document.getElementById('animal_race');
            typeSelect.addEventListener('change', function(){
                if(this.value === 'dog'){
                    raceSelect.disabled = false;
                } else{
                    raceSelect.value = 'none';
                    raceSelect.disabled = true;
                }
            })
        </script>
    </section>

</main>
