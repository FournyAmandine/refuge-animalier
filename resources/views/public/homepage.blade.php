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
        Accueil
    </x-slot:title_page>
    <main>
        <x-public.sections.introduction/>
        <x-public.sections.slider :cards="$cards"/>
        <x-public.sections.text-media
            section_title="Notre refuge"
            content="Le refuge Les Pattes Heureuses œuvre chaque jour pour le bien-être animal. Grâce à une équipe de bénévoles dévoués, nous assurons l’accueil, les soins, la réhabilitation et l’adoption responsable de nombreux animaux. Depuis sa création, le refuge Les Pattes Heureuses s’engage à offrir protection, soins et amour aux animaux abandonnés. Ici, chaque patte compte, chaque histoire mérite une fin heureuse."
            flex="flex-row-reverse"
            px="px-8"
            href="{!! route('public.aboutpage') !!}"
            title="Allez vers la page de notre refuge"
            label="En apprendre plus"
            :src="asset('assets/img/chien_1.png')"
            alt="illustration d'un chien corgi assis brun et blanc"
            width_img="137"
            heigth_img="207"
            position_x="left-7"
            position_top="top-[-3rem]"
            :src_patte="asset('assets/img/patte-left_medium.svg')"
        />
        <x-public.sections.text-media
            section_title="Être bénévole"
            content="Être bénévole au refuge Les Pattes Heureuses, c’est participer à une mission pleine de sens : offrir des soins, des promenades, des jeux et surtout de l’affection à nos pensionnaires. Que vous ayez une heure ou une journée, votre présence compte. Ensemble, faisons rimer entraide et bonheur animal."
            flex="flex-row"
            px="px-3"
            href="#"
            title="Allez vers la page de bénévolat"
            label="Devenir bénévole"
            :src="asset('assets/img/chien_2.png')"
            alt="illustration d'un chien labrador assis brun, noir et blanc"
            width_img="180"
            heigth_img="180"
            position_x="right-0"
            position_top="top-[-5rem]"
            :src_patte="asset('assets/img/patte-right_medium.svg')"
        />
    </main>
</x-public.app>
