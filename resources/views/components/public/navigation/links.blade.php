@props(['nav_class', 'li_class'])
@php
    $links = [
        ['li_class' => $li_class, 'href'=>route('public.animals.index'), 'label'=>'Nos compagnons', 'title'=>'Aller vers la page des compagnons'],
        ['li_class' => $li_class, 'href'=>route('public.aboutpage'), 'label'=>'Le refuge', 'title'=>'Aller vers la page du refuge'],
        ['li_class' => $li_class, 'href'=>route('public.volunteerpage'), 'label'=>'Devenir bénévole', 'title'=>'Aller vers la page de bénévole'],
        ['li_class' => $li_class, 'href'=>route('public.contactpage'), 'label'=>'Nous contacter', 'title'=>'Aller vers la page de contact'],
        ['li_class' => $li_class, 'href'=>route('public.adoptionpage'), 'label'=>'Adopter', 'title'=>'Aller vers la page d’adoption'],
    ];
@endphp


<ul class="{!! $nav_class !!} z-2">
    @foreach($links as $link)
        <x-public.navigation.link li_class="{!! $li_class !!}" :href="$link['href']" :label="$link['label']" :title="$link['title']"/>
    @endforeach
</ul>
