<header class="p-[0.9375rem] pb-[0.625rem] border-b-2 border-orange-600 bg-white">
    <a class="go_back" href="javascript:history.go(-1)" title="Retourner sur la page précédente"><span>Retour</span></a>
    <div class="flex items-end justify-between">

        <x-navigation.burger_menu>

        </x-navigation.burger_menu>

        <a href="{!! route('public.homepage') !!}" title="Revenir à la page d'accueil"><img width="174" height="59" src="assets/img/logo-tel.svg" alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison"></a>

        <a class="header_animaux" href="{!! route('public.homepage') !!}" title="Voir les animaux"><span>Voir les animaux</span></a>
    </div>
</header>
