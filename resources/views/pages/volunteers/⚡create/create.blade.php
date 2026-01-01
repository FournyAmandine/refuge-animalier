<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro
        ariane="{{ __('volunteer_create.breadcrumb') }}"
        title="{{ __('volunteer_create.title_create') }}"/>

    <section>
        <form wire:submit.prevent="store" method="post" class="xl:max-w-10/12 m-auto" enctype="multipart/form-data">
            @csrf
            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    {{ __('volunteer_create.general_info') }}
                </x-slot:legend>
                <div class="sm:flex sm:flex-wrap gap-6 ">
                    <x-admin.form.fields.input
                        wire:model="form.last_name"
                        field_name="volunteer_create_lastname"
                        label="{{ __('volunteer_create.last_name') }}"
                        :required="true"
                        placeholder="{{ __('volunteer_create.last_name_placeholder') }}"/>

                    <x-admin.form.fields.input
                        wire:model="form.first_name"
                        field_name="volunteer_create_firstname"
                        label="{{ __('volunteer_create.first_name') }}"
                        :required="true"
                        placeholder="{{ __('volunteer_create.first_name_placeholder') }}"/>
                </div>

                <div class="sm:flex sm:flex-wrap gap-6 pt-5">
                    <x-admin.form.fields.input
                        wire:model="form.birth_date"
                        field_name="volunteer_create_birth"
                        label="{{ __('volunteer_create.birth_date') }}"
                        :required="true"
                        type="date"
                        placeholder="01/01/1990"/>

                    <x-admin.form.fields.input
                        wire:model="form.email"
                        field_name="volunteer_create_email"
                        label="{{ __('volunteer_create.email') }}"
                        :required="true"
                        type="email"
                        placeholder="exemple@email.com"/>
                </div>

                <div class="pt-5">
                    <x-admin.form.fields.input
                        wire:model="form.telephone"
                        field_name="volunteer_create_telephone"
                        label="{{ __('volunteer_create.telephone') }}"
                        :required="true"
                        type="tel"
                        placeholder="0483 34 21 13"/>

                    <x-admin.form.fields.textarea
                        wire:model="form.link_animal"
                        field_name="volunteer_create_link_animal"
                        label="{{ __('volunteer_create.link_animal') }}"
                        placeholder="{{ __('volunteer_create.link_animal_placeholder') }}"/>
                </div>

                <div class="pt-5 sm:flex sm:flex-wrap gap-6">
                    <x-admin.form.fields.input
                        wire:model="form.photo"
                        accept="image/png, image/jpeg"
                        field_name="volunteer_create_profil"
                        label="{{ __('volunteer_create.photo') }}"
                        :required="false"
                        type="file"/>

                    <x-admin.form.fields.input
                        wire:model="form.password"
                        field_name="volunteer_create_password"
                        label="{{ __('volunteer_create.password') }}"
                        :required="true"
                        type="password"
                        placeholder="1234567"/>
                </div>
            </x-admin.form.fields.fieldset>

            <x-admin.form.fields.fieldset>
                <x-slot:legend>
                    {{ __('volunteer_create.availability_title') }}
                </x-slot:legend>

                <p class="text-xl pb-2 font-semibold">{{ __('volunteer_create.availability_label') }}</p>
                <div class="flex flex-wrap justify-between gap-y-4">
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
                <x-admin.form.buttons.button text="{{ __('volunteer_create.create_profile') }}"/>
            </div>
        </form>
    </section>
</main>

