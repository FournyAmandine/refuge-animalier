@props([
    /** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Animal[] */
    'animals',
    'class_title'
])


<section class="">
    <h2 class="{!! $class_title??'text-orange-600 font-[Baloo] font-extrabold text-2xl md:text-3xl' !!}">Nos derniers arrivants</h2>
        <div {{ $attributes->class(['pt-10 flex flex-col gap-5 items-center slider']) }}>
            @foreach($animals as $animal)
                <x-public.cards.card src="{!! $animal->img_path !!}"
                                     alt="Photo de {!! $animal->name !!}"
                                     title="{!! $animal->name !!}"
                                     href="{!! route('public.animals.show', $animal->id) !!}"
                                     name="{!! $animal->name !!}" :dd="[$animal->sexe,$animal->age . 'ans',$animal->race]"/>
            @endforeach
        </div>
</section>
