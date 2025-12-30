@props(['nav_class', 'li_class'])
@php
    $links = [
        ['li_class' => $li_class, 'href'=>route('dashboard'), 'label'=>__('header.dashboard'), 'title'=>__('header.go_to_header')],
        ['li_class' => $li_class, 'href'=>route('admin.animals.index'), 'label'=>__('header.animals'), 'title'=>__('header.go_to_animals')],
        ['li_class' => $li_class, 'href'=>route('admin.volunteers.index'), 'label'=>__('header.volunteers'), 'title'=>__('header.go_to_volunteers')],
        ['li_class' => $li_class, 'href'=>route('admin.contact_messages.index'), 'label'=>__('header.contact_messages'), 'title'=>__('header.go_to_contact_messages')],
        ['li_class' => $li_class, 'href'=>route('admin.volunteer_messages'), 'label'=>__('header.volunteer_requests'), 'title'=>__('header.go_to_volunteer_requests')],
        ['li_class' => $li_class, 'href'=>route('admin.adoptions.index'), 'label'=>__('header.adoptions'), 'title'=>__('header.go_to_adoptions')],
        ['li_class' => $li_class, 'href'=>route('admin.tasks.index'), 'label'=>__('header.tasks'), 'title'=>__('header.go_to_tasks')],
        ['li_class' => $li_class, 'href'=>route('profil'), 'label'=>__('header.your_profile'), 'title'=>__('header.go_to_your_profile')],
    ];
@endphp

<ul class="{{ $nav_class }} z-2 h-screen">
    <li>
        <a wire:navigate href="{{ route('public.homepage') }}" title="{{ __('header.go_home') }}">
            <img class="hidden lg:block" width="320" height="120" src="{{ asset('assets/img/logo-tel.svg') }}"
                 alt="{{ __('header.logo_alt') }}">
        </a>
    </li>
    <li class="lg:pb-5">
        <p class="border-b-2 border-orange-600 text-2xl lg:text-3xl text-orange-600 font-[Baloo] font-bold">
            {{ __('header.hello_name', ['name' => 'Elise']) }}
        </p>
    </li>
    @foreach($links as $link)
        <x-admin.navigation.link li_class="{{ $li_class }}" :href="$link['href']" :label="$link['label']" :title="$link['title']"/>
    @endforeach
    <li class="pt-10 lg:pt-5">
        <form method="POST" action="{{ route('logout') }}" class="border-t-2 border-orange-600 py-8 flex justify-center">
            @csrf
            <x-login.button text="{{ __('header.logout') }}"/>
        </form>
    </li>
</ul>
