<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro
        ariane="{{ __('animal_create.breadcrumb') }}"
        title="{{ __('animal_create.title') }}"
    />

    <section>
        <h3 class="sro">{{ __('animal_create.form_title') }}</h3>

        <form method="post"
              class="xl:max-w-10/12 m-auto"
              wire:submit="store()"
              enctype="multipart/form-data">
            @csrf

            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    {{ __('animal_create.general_information') }}
                </x-slot:legend>

                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input
                        wire:model="form.name"
                        field_name="animal_name"
                        label="{{ __('animal_create.name_label') }}"
                        :required="true"
                        placeholder="{{ __('animal_create.name_placeholder') }}"
                    />

                    <x-admin.form.fields.inputs_radio/>

                    <x-admin.form.fields.select
                        wire:model="form.state"
                        field_name="animal_statut"
                        :required="true"
                        label="{{ __('animal_create.status_label') }}">

                        <x-admin.form.fields.option
                            selected="selected"
                            value="none"
                            option_name="{{ __('common.choose_option') }}"
                        />

                        @foreach($this->getStatus() as $status)
                            <x-admin.form.fields.option
                                value="{{ $status->name }}"
                                option_name="{{ $status->value }}"
                            />
                        @endforeach
                    </x-admin.form.fields.select>
                </div>

                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.select
                        wire:model="form.type"
                        field_name="type"
                        :required="true"
                        label="{{ __('animal_create.type_label') }}">

                        <x-admin.form.fields.option
                            selected="selected"
                            value=""
                            option_name="{{ __('common.choose_option') }}"
                        />
                        <x-admin.form.fields.option value="Chien" option_name="{{ __('animal.types.dog') }}"/>
                        <x-admin.form.fields.option value="Chat" option_name="{{ __('animal.types.cat') }}"/>
                        <x-admin.form.fields.option value="Lapin" option_name="{{ __('animal.types.rabbit') }}"/>
                    </x-admin.form.fields.select>

                    <x-admin.form.fields.select
                        field_name="race"
                        wire:model="form.race"
                        :required="false"
                        label="{{ __('animal_create.race_label') }}"
                        disabled="disabled">

                        <x-admin.form.fields.option
                            selected="selected"
                            value=""
                            option_name="{{ __('common.choose_option') }}"
                        />
                        <x-admin.form.fields.option value="American Staff" option_name="American Staff"/>
                        <x-admin.form.fields.option value="Golden Retriever" option_name="Golden Retriever"/>
                        <x-admin.form.fields.option value="Caniche" option_name="Caniche"/>
                    </x-admin.form.fields.select>
                </div>

                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input
                        wire:model="form.birth_date"
                        field_name="animal_birth"
                        type="date"
                        :required="true"
                        label="{{ __('animal_create.birth_label') }}"
                    />

                    <x-admin.form.fields.input
                        wire:model="form.vaccines"
                        :list="true"
                        id_list="vaccines"
                        field_name="animal_vaccines"
                        label="{{ __('animal_create.vaccines_label') }}"
                        placeholder="{{ __('animal_create.vaccines_placeholder') }}"
                    />

                    <datalist id="vaccines">
                        @foreach($this->getVaccines() as $vaccin)
                            <option value="{{ $vaccin->value }}"></option>
                        @endforeach
                    </datalist>
                </div>
            </x-admin.form.fields.fieldset>

            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    {{ __('animal_create.description') }}
                </x-slot:legend>

                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input
                        wire:model="form.photo"
                        field_name="animal_pictures"
                        type="file"
                        accept="image/png, image/jpeg"
                        :required="false"
                        label="{{ __('animal_create.images_label') }}"
                    />

                    <x-admin.form.fields.input
                        wire:model="form.coat"
                        field_name="animal_coat"
                        :required="true"
                        label="{{ __('animal_create.coat_label') }}"
                        placeholder="{{ __('animal_create.coat_placeholder') }}"
                    />
                </div>

                <x-admin.form.fields.textarea
                    wire:model="form.description"
                    field_name="animal_description"
                    label="{{ __('animal_create.description_label') }}"
                    placeholder="{{ __('animal_create.description_placeholder') }}"
                />
            </x-admin.form.fields.fieldset>

            <div class="flex justify-end">
                <x-admin.form.buttons.button text="{{ __('animal_create.submit') }}"/>
            </div>
        </form>
    </section>
</main>
