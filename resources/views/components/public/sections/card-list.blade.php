@props([
    /** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Animal[] */
    'animals'
])

<section>
    <h2 class="text-orange-600 text-xl">Nos derniers arrivants</h2>
    <div {{ $attributes->class(['pt-10 flex flex-col gap-10 items-center']) }}>
        @foreach($animals as $animal)
            <x-public.cards.card src="{!! $animal->img_path !!}"
                                 alt="Photo de {!! $animal->name !!}"
                                 title="{!! $animal->name !!}"
                                 href="{!! route('public.animals.show', $animal->id) !!}"
                                 name="{!! $animal->name !!}" :dd="[$animal->sexe,$animal->age . 'ans',$animal->race]"/>
        @endforeach
    </div>
</section>
