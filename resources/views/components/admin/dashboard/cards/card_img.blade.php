@props(['src', 'alt', 'name'])

<figure>
    <img class="rounded-t-lg w-[336px] lg:w-[396px]" src="{!! $src !!}" alt="{!! $alt !!}">
</figure>
<div class="absolute inset-0 bg-gradient-to-tr from-black/80 to-transparent rounded-t-lg"></div>
<div class="absolute left-4 top-40 flex gap-4">
    <h3 class=" text-orange-50 font-bold text-2xl underline decoration-orange-400 decoration-2">
        {!! $name !!}
    </h3>
    <figure class="flex">
        <img src="{!! asset('assets/img/icones/pattes-small.svg') !!}" alt="Icone de patte d'un chat" width="21" height="18">
    </figure>
</div>
