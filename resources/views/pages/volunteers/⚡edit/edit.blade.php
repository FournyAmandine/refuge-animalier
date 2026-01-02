<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro
        ariane="{{ __('volunteer_edit.breadcrumb') }}"
        title="{{ __('volunteer_edit.title_edit') }}"/>

    <section>
        <form wire:submit.prevent="save" method="post" class="xl:max-w-10/12 m-auto">
            @csrf
            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    {{ __('volunteer_edit.general_info') }}
                </x-slot:legend>
                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input
                        wire:model="form.last_name"
                        field_name="volunteer_lastname"
                        label="{{ __('volunteer_edit.last_name') }}"
                        :required="true"
                        placeholder="{{ __('volunteer_edit.last_name_placeholder') }}"/>

                    <x-admin.form.fields.input
                        wire:model="form.first_name"
                        field_name="volunteer_firstname"
                        label="{{ __('volunteer_edit.first_name') }}"
                        :required="true"
                        placeholder="{{ __('volunteer_edit.first_name_placeholder') }}"/>
                </div>

                <div class="sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input
                        wire:model="form.birth_date"
                        field_name="volunteer_birth"
                        label="{{ __('volunteer_edit.birth_date') }}"
                        :required="true"
                        type="date"
                        placeholder="01/01/1990"/>

                    <x-admin.form.fields.input
                        wire:model="form.email"
                        field_name="volunteer_email"
                        label="{{ __('volunteer_edit.email') }}"
                        :required="true"
                        type="email"
                        placeholder="example@email.com"/>
                </div>

                <div>
                    <x-admin.form.fields.input
                        wire:model="form.telephone"
                        field_name="volunteer_telephone"
                        label="{{ __('volunteer_edit.telephone') }}"
                        :required="true"
                        type="tel"
                        placeholder="0483 34 21 13"/>

                    <x-admin.form.fields.textarea
                        wire:model="form.link_animal"
                        field_name="volunteer_link_animal"
                        label="{{ __('volunteer_edit.link_animal') }}"
                        placeholder="{{ __('volunteer_edit.link_animal_placeholder') }}"/>
                </div>

                <div class="pt-5 sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input
                        wire:model="form.photo"
                        accept="image/png, image/jpeg"
                        field_name="volunteer_profil"
                        label="{{ __('volunteer_edit.photo') }}"
                        :required="false"
                        type="file"/>

                    <x-admin.form.fields.input
                        wire:model="form.password"
                        field_name="volunteer_password"
                        label="{{ __('volunteer_edit.password') }}"
                        :required="true"
                        type="password"
                        placeholder="1234567"/>
                </div>
            </x-admin.form.fields.fieldset>

            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    {{ __('volunteer_edit.availability_title') }}
                </x-slot:legend>

                <p class="text-xl pb-2">{{ __('volunteer_edit.availability_label') }}</p> <div class="flex flex-wrap flex-col 2xl:flex-row justify-between gap-y-4">
                    <x-admin.form.fields.availability label="Lundi" field_name="monday" :form="$form" key="monday"/>
                    <x-admin.form.fields.availability label="Mardi" field_name="tuesday" :form="$form" key="tuesday"/>
                    <x-admin.form.fields.availability label="Mercredi" field_name="wednesday" :form="$form" key="wednesday"/>
                    <x-admin.form.fields.availability label="Jeudi" field_name="thursday" :form="$form" key="thursday"/>
                    <x-admin.form.fields.availability label="Vendredi" field_name="friday" :form="$form" key="friday"/>
                    <x-admin.form.fields.availability label="Samedi" field_name="saturday" :form="$form" key="saturday"/>
                    <x-admin.form.fields.availability label="Dimanche" field_name="sunday" :form="$form" key="sunday"/>
                </div>
            </x-admin.form.fields.fieldset>

            <div class="flex justify-end">
                <x-admin.form.buttons.button text="{{ __('volunteer_edit.update_profile') }}"/>
            </div>
        </form>
    </section>
</main>



