
@php
    $links = [
        ['li_class' => 'burger_link', 'href'=>'#', 'label'=>'Nos compagnons'],
        ['li_class' => 'burger_link', 'href'=>'#', 'label'=>'Le refuge'],
        ['li_class' => 'burger_link', 'href'=>'#', 'label'=>'Devenir bénévole'],
        ['li_class' => 'burger_link', 'href'=>'#', 'label'=>'Nous contacter'],
        ['li_class' => 'link-adopt', 'href'=>'#', 'label'=>'Adopter'],
    ]
@endphp


<ul class="nav__container">
    @foreach($links as $link)
        <x-navigation.link :li_class="$link['li_class']" :href="$link['href']" :label="$link['label']"/>
    @endforeach

</ul>
