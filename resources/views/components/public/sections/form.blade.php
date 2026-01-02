@props(['button_label', 'text', 'route'])

<section class="relative">
    <form class="md:w-9/10 md:m-auto px-5 pb-8 py-2.5 sm:px-15 md:px-20 md:py-10 shadow-[var(--shadow-xl)] rounded-xl border border-orange-600" action="{!! $route !!}" method="post">
        @csrf
        <p class="leading-9 pb-5">{!! $text !!}</p>
            {!! $slot !!}

        <div class="flex justify-end">
            <x-public.form.buttons.button text="{!! $button_label !!}" />
        </div>
    </form>
</section>
