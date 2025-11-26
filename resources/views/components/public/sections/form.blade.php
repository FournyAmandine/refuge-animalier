@props(['button_label', 'text'])

<section class="relative">
    <form class="px-5 pb-8 py-2.5 md:px-24 md:py-10 shadow-[var(--shadow-xl)] rounded-xl border border-orange-600" action="#" method="get">
        @csrf
        <p class="leading-9 pb-5">{!! $text !!}</p>
            {!! $slot !!}
        <div class="flex justify-end">
            <x-public.form.buttons.button text="{!! $button_label !!}" />
        </div>
    </form>
</section>
