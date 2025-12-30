<div class="pb-5">
    <p class="font-semibold pb-2.5 lg:text-xl">
        {{ __('animal_create.gender_label') }}
        <span class="text-red-600 required">*</span>
    </p>

    <div class="flex gap-4">
        <x-admin.form.fields.input_radio
            wire:model.defer="form.sexe"
            label="{{ __('animal_create.gender_male') }}"
            field_name="animal_sexe"
            id="animal_male"
            value="Mâle"
        />

        <x-admin.form.fields.input_radio
            wire:model.defer="form.sexe"
            label="{{ __('animal_create.gender_female') }}"
            field_name="animal_sexe"
            id="animal_female"
            value="Femelle"
        />
    </div>
</div>
