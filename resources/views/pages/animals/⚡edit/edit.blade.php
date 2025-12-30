<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro
        ariane="{{ __('animal_edit.breadcrumb') }}"
        title="{{ __('animal_edit.title', ['name' => $this->animal->name]) }}"
    />

    <section>
        <h3 class="sro">{{ __('animal_edit.form_title') }}</h3>

        <form method="post" class="xl:max-w-10/12 m-auto" wire:submit="save">
            @csrf

            {{-- Informations générales --}}
            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    {{ __('animal_edit.general_information') }}
                </x-slot:legend>

                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input
                        wire:model="form.name"
                        field_name="animal_name"
                        label="{{ __('animal_edit.name_label') }}"
                        :required="true"
                        placeholder="{{ __('animal_edit.name_placeholder') }}"
                    />

                    <x-admin.form.fields.inputs_radio/>

                    <x-public.form.fields.select
                        wire:model="form.state"
                        field_name="animal_statut"
                        :required="true"
                        label="{{ __('animal_edit.status_label') }}"
                    >
                        <x-public.form.fields.option selected value="none"
                                                     option_name="{{ __('animal_edit.choice_placeholder') }}"
                        />
                        @foreach($this->getStatus() as $status)
                            <x-public.form.fields.option
                                value="{{ $status->value }}"
                                option_name="{{ $status->value }}"
                            />
                        @endforeach
                    </x-public.form.fields.select>
                </div>

                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-public.form.fields.select
                        wire:model="form.type"
                        field_name="animal_type"
                        :required="true"
                        label="{{ __('animal_edit.type_label') }}"
                    >
                        <x-public.form.fields.option selected value="none"
                                                     option_name="{{ __('animal_edit.choice_placeholder') }}"
                        />
                        <x-public.form.fields.option value="Chien" option_name="{{ __('animal_edit.type_dog') }}"/>
                        <x-public.form.fields.option value="Lapin" option_name="{{ __('animal_edit.type_rabbit') }}"/>
                        <x-public.form.fields.option value="Chat" option_name="{{ __('animal_edit.type_cat') }}"/>
                    </x-public.form.fields.select>

                    <x-public.form.fields.select
                        field_name="animal_race"
                        wire:model="form.race"
                        label="{{ __('animal_edit.breed_label') }}"
                        disabled
                    >
                        <x-public.form.fields.option selected value="none"
                                                     option_name="{{ __('animal_edit.choice_placeholder') }}"
                        />
                        <x-public.form.fields.option value="American Staff" option_name="American Staff"/>
                        <x-public.form.fields.option value="Golden Retriever" option_name="Golden Retriever"/>
                        <x-public.form.fields.option value="Caniche" option_name="Caniche"/>
                        <x-public.form.fields.option value="Border Collie" option_name="Border Collie"/>
                    </x-public.form.fields.select>
                </div>

                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input
                        wire:model="form.birth_date"
                        field_name="animal_birth"
                        label="{{ __('animal_edit.birth_label') }}"
                        :required="true"
                        type="date"
                    />

                    <x-admin.form.fields.input
                        wire:model="form.vaccines"
                        field_name="animal_vaccines"
                        label="{{ __('animal_edit.vaccines_label') }}"
                        placeholder="{{ __('animal_edit.vaccines_placeholder') }}"
                    />
                </div>
            </x-admin.form.fields.fieldset>

            {{-- Description --}}
            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    {{ __('animal_edit.description') }}
                </x-slot:legend>

                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input
                        wire:model="form.photo"
                        field_name="animal_pictures"
                        :required="false"
                        accept="image/png, image/jpeg"
                        label="{{ __('animal_edit.photos_label') }}"
                        type="file"
                    />

                    <x-admin.form.fields.input
                        wire:model="form.coat"
                        field_name="animal_coat"
                        label="{{ __('animal_edit.coat_label') }}"
                        :required="true"
                        placeholder="{{ __('animal_edit.coat_placeholder') }}"
                    />
                </div>

                <x-admin.form.fields.textarea
                    wire:model="form.description"
                    field_name="animal_description"
                    label="{{ __('animal_edit.description_label') }}"
                    placeholder="{{ __('animal_edit.description_placeholder') }}"
                />
            </x-admin.form.fields.fieldset>

            <div class="flex justify-end">
                <x-admin.form.buttons.button
                    text="{{ __('animal_edit.submit') }}"
                />
            </div>
        </form>
    </section>
</main>
