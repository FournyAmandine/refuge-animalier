<x-public.app>
    <x-slot:title_page>
        {{ __('public_volunteer.title_page') }}
    </x-slot:title_page>
    <main class="contact_form pb-11 relative sm:w-4/5 sm:m-auto">
        <x-public.sections.intro
            title="{{ __('public_volunteer.intro_title') }}"
            ariane="{{ __('public_volunteer.intro_ariane') }}"
        />
        @if(session('success'))
            <div class="text-center py-5 text-2xl">
                {{ session('success') }}
            </div>
        @endif
        <x-public.sections.form route="{!! route('public.volunteerpage.store') !!}">
            <div class="md:flex md:gap-5 flex-wrap">
                <x-public.form.fields.input
                    field_name="last_name"
                    required="required"
                    placeholder="{{ __('public_volunteer.field_last_name') }}"
                    label="{{ __('public_volunteer.field_last_name') }}"
                />
                <x-public.form.fields.input
                    field_name="first_name"
                    required="required"
                    placeholder="{{ __('public_volunteer.field_first_name') }}"
                    label="{{ __('public_volunteer.field_first_name') }}"
                />
            </div>
            <x-public.form.fields.input
                type="email"
                field_name="email"
                required="required"
                placeholder="{{ __('public_volunteer.field_email') }}"
                label="{{ __('public_volunteer.field_email') }}"
            />
            <x-public.form.fields.textarea
                field_name="message"
                label="{{ __('public_volunteer.field_message') }}"
                placeholder="{{ __('public_volunteer.field_message_placeholder') }}"
            />
            <x-slot:text>
                {{ __('public_volunteer.form_text') }}
            </x-slot:text>
            <x-slot:button_label>
                {{ __('public_volunteer.button_label') }}
            </x-slot:button_label>
        </x-public.sections.form>
        <img class="absolute bottom-[-0.7rem] px-5 scale-100 md:scale-150 md:bottom-[-2.4rem] md:left-5 origin-bottom"
             src="{!! asset('assets/img/lapin_benevole.png') !!}"
             alt="{{ __('public_volunteer.img_alt') }}"
             width="180" height="206">
    </main>
</x-public.app>
