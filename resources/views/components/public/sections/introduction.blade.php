<section {{ $attributes->class(['flex flex-col pt-[3.75rem] pb-20 z-1']) }}>
    <div>
        <figure>
            <img class="" src="{!! asset('assets/img/logo-medium.svg') !!}"
                 alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison" width="207" height="72">
        </figure>
        <h2 class="intro mt-14 mb-32 font-semibold text-xl max-w-44">Offrez-leur une seconde chance, ils vous rendront
            un amour infini !</h2>
    </div>
    <figure class="absolute right-0 mr-5 mt-4">
        <img src="{!! asset('assets/img/golden-principal.png') !!}" width="290"
             height="326" alt="Illustration d'un chien, golden retriever assis">
    </figure>

    <div>
        <x-public.button class_button="px-5.5" href="{!! route('public.animals.index') !!}" label="Voir nos compagnons"
                         title="Aller vers la page des animaux"/>
        <x-public.button class_button="px-10" href="#" label="Adopter" title="Aller vers la page d'adoption"/>
    </div>
</section>
