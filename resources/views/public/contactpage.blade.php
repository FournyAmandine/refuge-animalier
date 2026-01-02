<x-public.app>
    <x-slot:title_page>
        {{ __('public_contact.title_page') }}
    </x-slot:title_page>
    <main class="contact_form pb-11 relative sm:w-4/5 sm:m-auto">
        <x-public.sections.intro title="{{ __('public_contact.intro_title') }}" ariane="{{ __('public_contact.intro_ariane') }}"/>

        @if(session('success'))
            <div class="text-center py-5 text-2xl">
                {{ __('public_contact.success_message') }}
            </div>
        @endif

        <x-public.sections.form route="{!! route('public.contactpage.store') !!}">
            <div class="md:flex md:gap-5 flex-wrap">
                <x-public.form.fields.input
                    field_name="last_name"
                    required="required"
                    placeholder="{{ __('public_contact.placeholder_last_name') }}"
                    label="{{ __('public_contact.label_last_name') }}"/>
                <x-public.form.fields.input
                    field_name="first_name"
                    required="required"
                    placeholder="{{ __('public_contact.placeholder_first_name') }}"
                    label="{{ __('public_contact.label_first_name') }}"/>
            </div>

            <x-public.form.fields.input
                type="email"
                field_name="email"
                required="required"
                placeholder="{{ __('public_contact.placeholder_email') }}"
                label="{{ __('public_contact.label_email') }}"/>

            <x-public.form.fields.textarea
                field_name="message"
                label="{{ __('public_contact.label_message') }}"
                placeholder="{{ __('public_contact.placeholder_message') }}"/>

            <x-slot:text>
                {{ __('public_contact.text') }}
            </x-slot:text>

            <x-slot:button_label>
                {{ __('public_contact.button_label') }}
            </x-slot:button_label>
        </x-public.sections.form>

        <figure class="">
            <img class="absolute bottom-[-1.63rem] px-5 scale-100 md:scale-150 md:bottom-[-2.4rem] md:left-[-5rem] origin-bottom"
                 src="{!! asset('assets/img/chien_contact.png') !!}"
                 alt="{{ __('public_contact.img_alt') }}"
                 width="180" height="206">
        </figure>
    </main>
</x-public.app>
