@props(['src', 'alt', 'name', 'src_db', 'src_storage'])

@if(\Illuminate\Support\Str::startsWith($src, 'assets/img/'))
    <figure>
        <img class="rounded-t-lg w-[336px] h-[330px] object-cover object-[50%_30%]" src="{!! $src_db !!}" alt="{!! $alt !!}" width="346"
             height="217">
    </figure>
@else
    <figure>
        <img class="rounded-t-lg w-[336px] h-[330px] object-cover object-[50%_30%]" src="{!! $src_storage !!}" alt="{!! $alt !!}" width="346"
             height="217">
    </figure>
@endif
<div class="absolute inset-0 bg-gradient-to-tr from-black/60 to-transparent rounded-t-lg"></div>
<div class="absolute left-4 top-74 flex gap-4">
    <h3 class=" text-orange-50 font-bold text-2xl underline decoration-orange-400 decoration-2">
        {!! $name !!}
    </h3>
    <figure class="flex">
        <img src="{!! asset('assets/img/icones/pattes-small.svg') !!}" alt="Icone de patte d'un chat" width="21" height="18">
    </figure>
</div>
