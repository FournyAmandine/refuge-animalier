@props(['stat', 'number'])


<article class="border border-orange-600 [box-shadow:var(--shadow-xl)] rounded-lg w-[48.7%] sm:w-[48%] px-4 pt-8 pb-6 flex flex-col items-center xl:w-[23.5%] xl:pt-16 xl:pb-14">
    <span class="number [font-family:Baloo] font-bold text-5xl text-orange-600">{!! $number !!}</span>
    <p>{!! $stat !!}</p>
</article>
