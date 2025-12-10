@props([
    /** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Animal[] */
    'class_title'
])

@php
    $animals=[
        ['src'=>asset('assets/img/moka.png'), 'alt'=>'Photo de notre chien Moka', 'name'=>'Moka', 'dd'=>['Mâle', '1 an', 'Caniche', 'En attente d’adoption', '10 juin 2025']],
        ['src'=>asset('assets/img/charly.png'), 'alt'=>'Photo de notre chien Charly', 'name'=>'Charly', 'dd'=>['Mâle', '2 ans', 'Caniche', 'En attente d’adoption', '10 novembre 2025']],
        ['src'=>asset('assets/img/simba.png'), 'alt'=>'Photo de notre chat Simba', 'name'=>'Simba', 'dd'=>['Femelle', '3 ans', 'Caniche', 'En soin', '10 octobre 2025']],
        ['src'=>asset('assets/img/bunny.png'), 'alt'=>'Photo de notre lapin Bunny', 'name'=>'Bunny', 'dd'=>['Femelle', '6 mois', 'Caniche', 'Adopté', '10 septembre 2025']],
    ]
@endphp


<section class="pt-30">
    <h3 class="{!! $class_title??'title_section text-xl md:text-2xl font-medium underline decoration-orange-400 decoration-2 pb-2.5' !!}">
        Vos derniers arrivants</h3>
    <div {{ $attributes->class(['pb-5 flex flex-col gap-5 lg:gap-10 items-center slider']) }}>
        @foreach($animals as $animal)
            <x-admin.dashboard.cards.card :src="$animal['src']"
                                          :alt="$animal['alt']"
                                          :name="$animal['name']" :dd="$animal['dd']" href="#"
                                          :title="$animal['name']"/>
        @endforeach
    </div>
    <div class="flex gap-2.5">
        <x-admin.button class="px-2.5" label="Voir tous les animaux" title="Aller sur la page avec les animaux" href="#"/>
        <x-admin.button class="px-3.5" label="Ajouter un animal" title="Aller sur la page pour ajouter un animal" href="#"/>
    </div>
</section>
