@props(['title_section', 'class_button', 'title_button', 'label'])


<section class="border rounded-xl border-orange-600 [box-shadow:var(--shadow-xl)] py-5 pt-8 pb-3 mb-8 todo min-[922px]:w-[47%] lg:w-[45%] xl:w-[29%]">
    <div class="flex items-start gap-2">
        <h3 class="title_section text-2xl font-medium underline decoration-orange-400 decoration-2 pb-4">{!! $title_section !!}</h3>
        <img src="{!! asset('assets/img/small_paw.svg') !!}" alt="Petite patte de chat orange">
    </div>
    {!! $slot !!}
    <div class="flex flex-col items-center">
        <x-admin.button href="#" :title="$title_button" :label="$label" :class="$class_button"/>
    </div>
</section>
