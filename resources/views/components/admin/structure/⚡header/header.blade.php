<header class="p-[0.9375rem] pb-[0.625rem] bg-white lg:p-0 lg:sticky lg:top-0 lg:h-screen">
    <h1 class="sro">Les Pattes Heureuses</h1>
    <nav class="flex items-center justify-between md:items-center lg:hidden border-b-2 border-orange-600">
        <h2 class="sro">Navigation principale</h2>

        <div class="lg:hidden flex items-center justify-between w-[60%]">
           <x-admin.navigation.burger-menu/>
            <a wire:navigate href="{!! route('public.homepage') !!}" title="Revenir à la page d'accueil">
                <img class="md:hidden" width="174" height="59" src="{!! asset('assets/img/logo-tel.svg') !!}"
                     alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison">
                <img class="hidden md:block max-w-1/1" width="385" height="84"
                     src="{!! asset('assets/img/logo_nav_medium.svg') !!}"
                     alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison">
            </a>
        </div>

        <div class="flex items-center gap-3">
            <a wire:navigate class="inline-block" href="#"
               title="Voir votre profil"><img src="{!! asset('assets/img/profil.png') !!}" alt="Photo de profil de l'utilisateur"></a>
        </div>
    </nav>
    <nav class="hidden lg:block">
        <h2 class="sro">Navigation principale</h2>
        <x-admin.navigation.links nav_class="admin_side_nav_container" li_class="admin_burger_link"/>
    </nav>
</header>

