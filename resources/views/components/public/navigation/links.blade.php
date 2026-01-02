@props(['nav_class', 'li_class'])

@php
    $links = [
        [
            'li_class' => $li_class,
            'href'=>route('public.animals.index'),
            'label'=>__('public_nav.animals'),
            'title'=>__('public_nav.title_animals')
        ],
        [
            'li_class' => $li_class,
            'href'=>route('public.aboutpage'),
            'label'=>__('public_nav.refuge'),
            'title'=>__('public_nav.title_refuge')
        ],
        [
            'li_class' => $li_class,
            'href'=>route('public.volunteerpage'),
            'label'=>__('public_nav.volunteer'),
            'title'=>__('public_nav.title_volunteer')
        ],
        [
            'li_class' => $li_class,
            'href'=>route('public.contactpage'),
            'label'=>__('public_nav.contact'),
            'title'=>__('public_nav.title_contact')
        ],
        [
            'li_class' => $li_class,
            'href'=>route('public.adoptionpage'),
            'label'=>__('public_nav.adopt'),
            'title'=>__('public_nav.title_adopt')
        ],
    ];
@endphp

<ul class="{!! $nav_class !!} z-2">
    @foreach($links as $link)
        <x-public.navigation.link
            li_class="{!! $link['li_class'] !!}"
            :href="$link['href']"
            :label="$link['label']"
            :title="$link['title']"
        />
    @endforeach
</ul>
