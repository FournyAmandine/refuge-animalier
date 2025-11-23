@props([
    /** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Animal[] */
    'animals'
])

<section {{ $attributes->class(['pt-10 flex flex-col gap-10 items-center']) }}>
    @foreach($animals as $animal)
        <x-public.cards.card src="{!! $animal->img_path !!}"
                             alt="Photo de {!! $animal->name !!}"
                             title="{!! $animal->name !!}"
                             href="#"
                             name="{!! $animal->name !!}" :dd="[$animal->sexe,$animal->age . 'ans',$animal->race]"/>
    @endforeach
</section>
