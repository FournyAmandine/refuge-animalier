
@php
    $links = [
        ['li_class' => 'burger_link', 'href'=>'#', 'label'=>'Nos compagnons', 'title'=>'Aller vers la page des compagnons'],
        ['li_class' => 'burger_link', 'href'=>'#', 'label'=>'Le refuge', 'title'=>'Aller vers la page du refuge'],
        ['li_class' => 'burger_link', 'href'=>'#', 'label'=>'Devenir bénévole', 'title'=>'Aller vers la page de bénévole'],
        ['li_class' => 'burger_link', 'href'=>'#', 'label'=>'Nous contacter', 'title'=>'Aller vers la page de contact'],
        ['li_class' => 'link-adopt', 'href'=>'#', 'label'=>'Adopter', 'title'=>'Aller vers la page d’adoption'],
    ]
@endphp


<ul class="nav__container">
    @foreach($links as $link)
        <x-navigation.link :li_class="$link['li_class']" :href="$link['href']" :label="$link['label']" :title="$link['title']"/>
    @endforeach
</ul>
