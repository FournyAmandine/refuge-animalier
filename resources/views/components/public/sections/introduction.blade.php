<section {{ $attributes->class(['flex flex-col pt-[3.75rem] pb-20 2xl:pb-40 z-1']) }}>
    <div class="relative">
        <figure class="max-w-[60%] sm:max-w-[70%] lg:max-w-[50%]">
            <img class="w-1/1" src="{!! asset('assets/img/logo-medium.svg') !!}"
                 alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison">
        </figure>
        <figure class="absolute lg:right-8 lg:top-[-5rem] z-[-1] lg:mt-10 lg:w-110 hidden lg:block">
            <img class="w-1/1" src="{!! asset('assets/img/patte-right_medium.svg') !!}"
                 alt="Illustration d'une patte de chat">
        </figure>
        <h2 class="intro mt-10 mb-32 xs:mb-15 md:mb-12 font-semibold text-xl max-w-44 sm:max-w-70 md:max-w-110 lg:text-2xl">Offrez-leur une seconde chance, ils vous rendront
            un amour infini !</h2>
    </div>
    <figure class="w-[290px] md:w-100 xl:w-118 absolute right-0 top-47 md:top-25 mr-5 mt-4 sm:right-10 md:mt-6">
        <img class="w-1/1" src="{!! asset('assets/img/golden-principal.png') !!}" alt="Illustration d'un chien, golden retriever assis">
    </figure>

    <div class="flex gap-2 xs:gap-6 flex-wrap z-1">
        <x-public.button class_button="px-5.5 lg:text-xl hover:scale-110 duration-300 transition-all" href="{!! route('public.animals.index') !!}" label="Voir nos compagnons"
                         title="Aller vers la page des animaux"/>
        <x-public.button class_button="px-10 lg:text-xl hover:scale-110 duration-300 transition-all" href="{!! route('public.adoptionpage') !!}" label="Adopter" title="Aller vers la page d'adoption"/>
    </div>
</section>
