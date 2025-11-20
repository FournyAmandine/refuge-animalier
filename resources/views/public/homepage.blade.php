@php
    $cards=[
        ['src'=>asset('assets/img/charly.png'), 'alt'=>'Photo d’un chien border collie noir et blanc dans les plantes', 'name'=>'Charly', 'dd'=>[
            'Mâle', '2 ans', 'Border collie'
        ]],
        ['src'=>asset('assets/img/moka.png'), 'alt'=>'Photo d’un chat roux couché à terre', 'name'=>'Moka', 'dd'=>[
            'Mâle', '1 an', 'Caniche'
        ]],
        ['src'=>asset('assets/img/simba.png'), 'alt'=>'Photo d’un chien caniche brun qui court', 'name'=>'Simba', 'dd'=>[
            'Mâle', '4 ans', 'Chat'
        ]],
        ['src'=>asset('assets/img/panpan.png'), 'alt'=>'Photo d’un petit lapin nain dans l’herbe', 'name'=>'Panpan', 'dd'=>[
            'Femelle', '10 mois', 'Lapin nain'
        ]],
    ]
@endphp


<x-public.app>
    <x-slot:title_page>
        Les Pattes Heureuses
    </x-slot:title_page>
    <main>
        <section class="flex flex-col pt-[3.75rem] pb-20">
            <div class="z-1">
                <img class="" src="{!! asset('assets/img/logo-medium.svg') !!}"
                     alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison" width="207" height="72">
                <h2 class="mt-14 mb-32 font-semibold text-xl max-w-44">Offrez-leur une seconde chance, ils vous rendront
                    un amour infini !</h2>
            </div>
            <img class="absolute right-0 mr-5 mt-4" src="{!! asset('assets/img/golden-principal.png') !!}" width="290"
                 height="326" alt="Illustration d'un chien, golden retriever assis">
            <div>
                <x-public.button padding_x="px-5.5" href="#" label="Voir nos compagnons"
                                 title="Aller vers la page des animaux"/>
                <x-public.button padding_x="px-10" href="#" label="Adopter" title="Aller vers la page d'adoption'"/>
            </div>
        </section>
        <x-public.sections.slider :cards="$cards"/>

    </main>
</x-public.app>
