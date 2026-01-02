<section {{ $attributes->class(['flex flex-col pt-[3.75rem] pb-20 2xl:pb-40 z-1']) }}>
    <div class="relative">
        <figure class="max-w-[60%] sm:max-w-[70%] lg:max-w-[50%]">
            <img class="w-1/1" src="{{ asset('assets/img/logo-medium.svg') }}"
                 alt="{{ __('public_home.logo_alt') }}">
        </figure>
        <figure class="absolute lg:right-8 lg:top-[-5rem] z-[-1] lg:mt-10 lg:w-110 hidden lg:block">
            <img class="w-1/1" src="{{ asset('assets/img/patte-right_medium.svg') }}"
                 alt="{{ __('public_home.paw_alt') }}">
        </figure>
        <h2 class="intro mt-10 mb-32 xs:mb-15 md:mb-12 font-semibold text-xl max-w-44 sm:max-w-70 md:max-w-110 lg:text-2xl">
            {{ __('public_home.intro_title') }}
        </h2>
    </div>

    <figure class="w-[290px] md:w-100 xl:w-118 absolute right-0 top-47 md:top-25 mr-5 mt-4 sm:right-10 md:mt-6">
        <img class="w-1/1" src="{{ asset('assets/img/golden-principal.png') }}" alt="{{ __('public_home.dog_alt') }}">
    </figure>

    <div class="flex gap-2 xs:gap-6 flex-wrap z-1">
        <x-public.button class_button="px-5.5 lg:text-xl hover:scale-110 duration-300 transition-all"
                         href="{{ route('public.animals.index') }}"
                         label="{{ __('public_home.button_animals_label') }}"
                         title="{{ __('public_home.button_animals_title') }}"/>
        <x-public.button class_button="px-10 lg:text-xl hover:scale-110 duration-300 transition-all"
                         href="{{ route('public.adoptionpage') }}"
                         label="{{ __('public_home.button_adopt_label') }}"
                         title="{{ __('public_home.button_adopt_title') }}"/>
    </div>
</section>
