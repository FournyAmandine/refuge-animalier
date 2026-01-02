<x-public.app>
    <x-slot:title_page>
        {{ $animal->name }}
    </x-slot:title_page>
    <main class="animal_single">
        <x-public.sections.intro
            ariane="{{ __('public_animals_show.breadcrumb', ['name' => $animal->name]) }}"
            title="{{ $animal->name }}"
        />
        <section>
            <h3 class="sro">{{ __('public_animals_show.description_of', ['name' => $animal->name]) }}</h3>
            <div class="sm:flex sm:gap-6">
                <div class="sm:max-w-[50%]">
                    <div class="sm:sticky sm:top-3">
                        <img class="rounded-lg w-1/1 h-auto"
                             src="{{ $animal->img_path }}"
                             alt="{{ __('public_animals_show.image_of', ['name' => $animal->name]) }}">
                        <div class="flex justify-between pt-5 gap-5">
                            <img class="rounded-lg w-1/2"
                                 src="{{ $animal->img_path }}"
                                 alt="{{ __('public_animals_show.image_of', ['name' => $animal->name]) }}">
                            <img class="rounded-lg w-1/2"
                                 src="{{ $animal->img_path }}"
                                 alt="{{ __('public_animals_show.image_of', ['name' => $animal->name]) }}">
                        </div>
                    </div>
                </div>
                <div class="pt-5 flex flex-col gap-3 font-semibold leading-8 sm:max-w-[50%] sm:pt-0">
                    <p class="text-2xl md:[font-size:var(--text-2xl)]">{{ $animal->race }}</p>
                    <p class="text-xl md:[font-size:var(--text-2xl)]">{{ $animal->sexe }}</p>
                    <p class="text-xl md:[font-size:var(--text-2xl)]">
                        {{ __('public_animals_show.born_on', ['date' => \Carbon\Carbon::parse($animal->birth_date)->translatedFormat('d F Y'), 'age' => $animal->age]) }}
                    </p>
                    <p class="text-lg md:[font-size:var(--text-xl)]">{{ $animal->description }}</p>
                </div>
            </div>
        </section>

        <section>
            <h3 class="pt-20 text-2xl md:text-3xl text-orange-600 pb-3">{{ __('public_animals_show.get_to_know') }}</h3>
            <form action="#" method="get">
                <x-public.form.adoption-form>
                    <x-slot:options>
                        <x-public.form.fields.option
                            selected="selected"
                            value="{{ $animal->name }}"
                            option_name="{{ $animal->name }}"
                        />
                    </x-slot:options>
                </x-public.form.adoption-form>
                <div class="flex justify-end">
                    <x-public.form.buttons.button text="{{ __('public_animals_show.send_request') }}"/>
                </div>
            </form>
        </section>

        <section class="show_cards pt-28 text-xl relative pb-21">
            <img class="absolute z-1 right-6 top-25 md:right-8 lg:right-20"
                 src="{{ asset("assets/img/chien_3.png") }}"
                 alt="{{ __('public_animals_show.illustration_dog') }}" width="108" height="127">
            <x-public.sections.card-list :animals="$animals"
                                         class="grid grid-cols-[repeat(5,300px)] gap-6 overflow-x-scroll py-4"/>
            <img class="absolute z-1 left-6 bottom-[-0.5rem]"
                 src="{{ asset("assets/img/lapin_2.png") }}"
                 alt="{{ __('public_animals_show.illustration_rabbit') }}" width="108" height="128">
        </section>
    </main>
</x-public.app>
