<div class="pb-5">
    <p class="font-semibold pb-2.5 lg:text-xl">Cocher le sexe <span class="text-red-600 required">*</span></p>
    <div class="flex gap-4">
        <x-admin.form.fields.input_radio wire:model.defer="form.sexe" label="Mâle" field_name="animal_sexe" id="animal_male" value="Mâle"/>
        <x-admin.form.fields.input_radio wire:model.defer="form.sexe" label="Femelle" field_name="animal_sexe" id="animal_femelle" value="Femelle"/>
    </div>
</div>
