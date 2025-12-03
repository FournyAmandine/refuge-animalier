@php
    $history=[
        'Sensibiliser le public à la cause animale,', 'Encourager l’adoption responsable,', 'Promouvoir la stérilisation et la vaccination,', 'Offrir un accompagnement bienveillant aux familles adoptantes.'
    ];

    $actions = [
        'Accueillons les animaux abandonnés ou signalés,', 'Leur apportons soins, nourriture et attention,', 'Gérons les demandes d’adoption,', 'Organisons des rencontres entre adoptants et animaux,', 'Maintenons un contact régulier avec les nouvelles familles pour assurer le suivi.'
    ]
@endphp


<x-public.app>
    <x-slot:title_page>
        Notre refuge
    </x-slot:title_page>
    <main>
        <x-public.sections.intro title="Découvrez notre refuge" ariane="Refuge"/>

        <x-public.sections.text-media-list
            :has_main_title="true"
            section_title="Notre histoire"
            content="Notre objectif est simple : protéger, soigner et replacer chaque animal dans un foyer adapté et aimant. Mais au-delà de l’adoption, nous croyons en une mission plus large&nbsp;:"
            class_button="px-3 hover:scale-110 duration-300 transition-all"
            class_div="md:flex-row justify-between md:gap-3 lg:gap-40 2xl:gap-80 md:pl-10"
            href="{!! route('public.adoptionpage') !!}"
            title="Allez vers la page d'adoption'"
            label="Devenir un foyer accueillant"
            :button="true"
            :src="asset('assets/img/chat_1.png')"
            alt="illustration d'un chat chat blanc, gris, brun assis"
            width_img="170"
            heigth_img="223"
            :src_patte="asset('assets/img/patte-right_medium.svg')"
            :items="$history"
            class_img="absolute right-0 top-[-3rem] md:top-10 lg:top-10 lg:right-20"
        />

        <x-public.sections.text-media
            :has_main_title="true"
            section_title="Notre équipe"
            class_div="md:flex-row-reverse md:gap-3 lg:items-center justify-between lg:gap-40 2xl:gap-80 md:pl-10"
            content="Le refuge vit grâce à une petite équipe passionnée&nbsp;:&nbsp;des bénévoles dévoués, des familles d’accueil, et bien sûr Élise, la fondatrice, qui supervise les soins, les adoptions et la gestion quotidienne.Chaque membre apporte son énergie, son amour et ses compétences pour garantir le bien-être de nos pensionnaires."
            class_button="px-5 hover:scale-110 duration-300 transition-all"
            class="flex-row-reverse"
            :button="true"
            href="{!! route('public.volunteerpage') !!}"
            title="Allez vers la page bénévole"
            label="Devenir bénévole"
            :src="asset('assets/img/chat_2.png')"
            alt="illustration d'un chat gris, roux et brun assis et nous regarde"
            width_img="160"
            heigth_img="185"
            class_img="absolute left-2 top-[-4rem] md:top-[-1rem] lg:top-10 lg:left-25"
            :src_patte="asset('assets/img/patte-left_medium.svg')"
        />

        <x-public.sections.text-media-list
            :has_main_title="true"
            section_title="Nos actions au quotidien"
            content="Chaque jour, nous&nbsp;:"
            class_div="md:flex-row justify-between 2xl:items-center md:gap-3 lg:gap-40 2xl:gap-80 md:pl-10"
            :button="false"
            :src="asset('assets/img/chat_3.png')"
            alt="illustration d'un chat gris"
            width_img="170"
            heigth_img="170"
            :src_patte="asset('assets/img/patte-right_medium.svg')"
            :items="$actions"
            class_img="absolute right-0 top-[-4rem] md:top-3 lg:top-10 lg:right-20"
        />

        <x-public.sections.text-media
            :has_main_title="true"
            section_title="Notre philosophie"
            content="Nous croyons que chaque animal mérite une vie douce et respectueuse. Chaque adoption est une rencontre unique, une histoire qui commence. Aux Pattes Heureuses, nous prenons le temps de connaître nos compagnons pour leur offrir la famille qui leur correspond vraiment."
            class_button="px-4.5 hover:scale-110 duration-300 transition-all"
            class_div="md:flex-row-reverse md:gap-3 lg:items-center justify-between lg:gap-40 2xl:gap-80 md:pl-10"
            class="flex-row-reverse"
            :button="true"
            href="{!! route('public.animals.index') !!}"
            title="Allez vers la page animaux"
            label="Voir nos compagnons"
            :src="asset('assets/img/chat_4.png')"
            alt="illustration d'un chat gris, roux et brun assis et nous regarde"
            width_img="140"
            heigth_img="190"
            class_img="absolute left-2 top-[-4rem] md:top-[-2rem] lg:top-5 lg:left-20"
            :src_patte="asset('assets/img/patte-left_medium.svg')"
        />

    </main>
</x-public.app>
