<section {{ $attributes->class(['flex flex-col pt-[3.75rem] pb-20 z-1']) }}>
    <div class="relative">
        <figure class="xs:hidden">
            <img src="{!! asset('assets/img/logo-medium.svg') !!}"
                 alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison" width="207" height="72">
        </figure>
        <figure class="absolute right-0 top-[-3rem] z-[-1] lg:mt-25 lg:w-110 hidden sm:block lg:hidden">
            <img src="{!! asset('assets/img/patte-right_medium.svg') !!}"
                 alt="Illustration d'une patte de chat" width="375" height="140">
        </figure>
        <figure class="absolute right-8 top-[-5rem] z-[-1] lg:mt-25 lg:block hidden">
            <img src="{!! asset('assets/img/patte-right_medium.svg') !!}"
                 alt="Illustration d'une patte de chat" width="420" height="140">
        </figure>
        <figure class="hidden xs:block lg:hidden">
            <img src="{!! asset('assets/img/logo-medium.svg') !!}"
                 alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison" width="350" height="140">
        </figure>
        <figure class="hidden lg:block">
            <img src="{!! asset('assets/img/logo_large.svg') !!}"
                 alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison" width="600" height="240">
        </figure>
        <h2 class="intro mt-14 mb-32 xs:mb-15 md:mb-12 font-semibold text-xl max-w-44 sm:max-w-70 md:max-w-110 lg:text-2xl">Offrez-leur une seconde chance, ils vous rendront
            un amour infini !</h2>
    </div>
    <figure class="lg:hidden absolute right-0 mr-5 mt-4 sm:right-10 md:mt-6 lg:mt-25">
        <img src="{!! asset('assets/img/golden-principal.png') !!}" width="290"
             height="326" alt="Illustration d'un chien, golden retriever assis">
    </figure>
    <figure class="hidden lg:block absolute right-30 mt-15">
        <img src="{!! asset('assets/img/golden-principal.png') !!}" width="380"
             height="326" alt="Illustration d'un chien, golden retriever assis">
    </figure>

    <div class="flex gap-2 xs:gap-6 flex-wrap z-1">
        <x-public.button class_button="px-5.5 lg:text-xl" href="{!! route('public.animals.index') !!}" label="Voir nos compagnons"
                         title="Aller vers la page des animaux"/>
        <x-public.button class_button="px-10 lg:text-xl" href="{!! route('public.adoptionpage') !!}" label="Adopter" title="Aller vers la page d'adoption"/>
    </div>
</section>
