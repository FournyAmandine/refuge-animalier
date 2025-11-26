<header class="p-[0.9375rem] pb-[0.625rem] border-b-2 border-orange-600 bg-white">
    <h1 class="sro">Les Pattes Heureuses</h1>
    <a class="go_back md:hidden" href="javascript:history.go(-1)" title="Retourner sur la page précédente"><span>Retour</span></a>
    <nav class="flex items-end justify-between md:items-center">
        <h2 class="sro">Navigation principale</h2>

        <div class="flex items-end justify-between w-67 md:justify-start md:gap-10">
            <x-public.navigation.burger_menu/>
            <a href="{!! route('public.homepage') !!}" title="Revenir à la page d'accueil">
                <img class="md:hidden" width="174" height="59" src="{!! asset('assets/img/logo-tel.svg') !!}" alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison">
                <img class="hidden md:block" width="385" height="84" src="{!! asset('assets/img/logo_nav_medium.svg') !!}" alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison">
            </a>
        </div>


        <div class="flex items-center gap-3">
            <nav class="hidden md:block">
                <x-public.navigation.links nav_class="flex items-center gap-10" li_class="nav_links"/>
            </nav>

            <a class="header_animaux lg:hidden" href="{!! route('public.animals.index') !!}" title="Voir les animaux"><span>Voir les animaux</span></a>
        </div>
    </nav>
</header>
