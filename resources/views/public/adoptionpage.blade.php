<x-public.app>
    <x-slot:title_page>
        {{ __('public_adoption.title_page') }}
    </x-slot:title_page>
    <main class="contact_form pb-11 relative md:w-4/5 md:m-auto">
        <x-public.sections.intro title="{{ __('public_adoption.intro_title') }}" ariane="{{ __('public_adoption.intro_ariane') }}"/>

        @if(session('success'))
            <div class="text-center py-5 text-2xl">
                {{ __('public_adoption.success_message') }}
            </div>
        @endif

        <x-public.sections.form route="{!! route('public.adoptionpage.store') !!}">
            <x-public.form.adoption-form>
                <x-slot:options>
                    @foreach($animals as $animal)
                        <x-public.form.fields.option
                            value="{{ $animal->id }}"
                            option_name="{{ __('public_adoption.animal_option', ['name' => $animal->name, 'race' => $animal->race]) }}"
                        />
                    @endforeach
                </x-slot:options>
            </x-public.form.adoption-form>

            <x-slot:text>
                {{ __('public_adoption.text') }}
            </x-slot:text>

            <x-slot:button_label>
                {{ __('public_adoption.button_label') }}
            </x-slot:button_label>
        </x-public.sections.form>

        <img class="absolute bottom-[-1rem] px-5 scale-100 md:scale-150 md:bottom-[-2.4rem] md:left-[-5rem] origin-bottom"
             src="{!! asset('assets/img/chat_adoption.png') !!}"
             alt="{{ __('public_adoption.img_alt') }}"
             width="230" height="206">
    </main>
</x-public.app>
