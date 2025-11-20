@props(['src', 'alt', 'name'])

<img class="rounded-t-xl" src="{!! $src !!}"
     alt="{!! $alt !!}">
<div class="absolute inset-0 bg-gradient-to-tr from-black/80 to-transparent rounded-t-xl"></div>
<div class="absolute left-4 top-36 flex gap-4">
    <p class=" text-orange-50 font-bold text-2xl underline decoration-orange-400 decoration-2">
        {!! $name !!}
    </p>
    <img src="{!! asset('assets/img/icones/pattes-small.svg') !!}" alt="">
</div>
