@props([
    /** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Animal[] */
    'class_title'
])

@php
    $animals=[
        ['src'=>asset('assets/img/background_volunteer.svg'), 'alt'=>'Photo de notre chien Moka', 'name'=>'Louis Fourny', 'dd'=>['19 ans', '10 novembre 2025']],
        ['src'=>asset('assets/img/background_volunteer.svg'), 'alt'=>'Photo de notre chien Charly', 'name'=>'Victoria Briol', 'dd'=>['26 ans', '10 janvier 2025']],
        ['src'=>asset('assets/img/background_volunteer.svg'), 'alt'=>'Photo de notre chat Simba', 'name'=>'Loïc Mozin', 'dd'=>['16 ans', '10 septembre 2025']],
        ['src'=>asset('assets/img/background_volunteer.svg'), 'alt'=>'Photo de notre lapin Bunny', 'name'=>'Laurent Fourny', 'dd'=>['32 ans', '10 avril 2025']],
    ]
@endphp


<section class="pt-30">
    <h3 class="{!! $class_title??'title_section text-xl md:text-2xl font-medium underline decoration-orange-400 decoration-2 pb-2.5' !!}">
        Vos bénévoles</h3>
    <div {{ $attributes->class(['pb-5 flex flex-col gap-5 items-center slider']) }}>
        @foreach($animals as $animal)
            <x-admin.dashboard.volunteers.card :src="$animal['src']"
                                          :alt="$animal['alt']"
                                          :name="$animal['name']" :dd="$animal['dd']" href="#"
                                          :title="$animal['name']"/>
        @endforeach
    </div>
    <div class="flex gap-2.5">
        <x-admin.button class="px-1" label="Voir tous les bénévoles" title="Aller sur la page avec les bénévoles" href="#"/>
        <x-admin.button class="px-1" label="Ajouter un bénévole" title="Aller sur la page pour ajouter un bénévole" href="#"/>
    </div>
</section>
