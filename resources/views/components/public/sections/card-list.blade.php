@props([
    /** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Animal[] */
    'animals',
    'class_title'
])


<section class="flex flex-col items-center">
    <h2 class="{!! $class_title??'text-orange-600 font-[Baloo] font-extrabold text-2xl' !!}">Nos derniers arrivants</h2>
    <div class="flex justify-center">
        <div {{ $attributes->class(['pt-5 flex flex-col gap-4 items-start slider']) }}>
            @foreach($animals as $animal)
                <x-public.cards.card src="{!! $animal->img_path !!}"
                                     alt="Photo de {!! $animal->name !!}"
                                     title="{!! $animal->name !!}"
                                     href="{!! route('public.animals.show', $animal->id) !!}"
                                     name="{!! $animal->name !!}" :dd="[$animal->sexe,$animal->age . 'ans',$animal->race]"/>
            @endforeach
        </div>
    </div>
</section>
