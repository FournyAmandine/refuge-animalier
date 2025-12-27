@props(['nav_class', 'li_class'])
@php
    $links = [
        ['li_class' => $li_class, 'href'=>route('dashboard'), 'label'=>'Votre tableau de bord', 'title'=>'Aller vers la page de votre tableau de bord'],
        ['li_class' => $li_class, 'href'=>route('admin.animals.index'), 'label'=>'Vos animaux', 'title'=>'Aller vers la page des vos animaux'],
        ['li_class' => $li_class, 'href'=>route('admin.volunteers.index'), 'label'=>'Vos bénévoles', 'title'=>'Aller vers la page de vos bénévoles'],
        ['li_class' => $li_class, 'href'=>route('admin.messages.index'), 'label'=>'Vos messages', 'title'=>'Aller vers la page avec vos messages de contacts'],
        ['li_class' => $li_class, 'href'=>route('admin.adoptions.index'), 'label'=>'Vos demandes', 'title'=>'Aller vers la page avec vos demandes d’adoption'],
        ['li_class' => $li_class, 'href'=>route('admin.tasks.index'), 'label'=>'Vos tâches', 'title'=>'Aller vers la page avec vos fiches à valider'],
        ['li_class' => $li_class, 'href'=>route('profil'), 'label'=>'Votre profil', 'title'=>'Aller vers la page dde votre profil'],
    ];
@endphp

<ul class="{!! $nav_class !!} z-2 h-screen">
    <li>
        <a wire:navigate href="{!! route('public.homepage') !!}" title="Revenir à la page d'accueil">
            <img class="hidden lg:block" width="320" height="120" src="{!! asset('assets/img/logo-tel.svg') !!}"
                 alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison">
        </a>
    </li>
    <li class="lg:pb-15">
        <p class="border-b-2 border-orange-600 text-2xl lg:text-3xl text-orange-600 font-[Baloo] font-bold">Bonjour Elise,</p>
    </li>
    @foreach($links as $link)
        <x-admin.navigation.link li_class="{!! $li_class !!}" :href="$link['href']" :label="$link['label']" :title="$link['title']"/>
    @endforeach
    <li class="pt-10 lg:pt-15">
        <form method="POST" action="{{ route('logout') }}" class="border-t-2 border-orange-600 py-8 flex justify-center">
            @csrf
            <x-login.button text="Déconnexion"/>
        </form>
    </li>
</ul>
