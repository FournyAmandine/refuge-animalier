@props(['section_title',
        'content',
        'label',
        'title',
        'href',
        'class_button',
        'src',
        'alt',
        'width_img',
        'heigth_img',
        'src_patte',
        'flex',
        'position_x',
        'position_top',
        'button'=>true,
        'class_img',
        'has_main_title'=>false
        ])

<section class="pb-20">
    @if($has_main_title)
        <h3 class="text-orange-600 text-xl pb-2.5 pt-5">{!! $section_title !!}</h3>
    @else
        <h2 class="text-orange-600 font-extrabold text-xl pb-2.5 pt-5">{!! $section_title !!}</h2>
    @endif
    <div>
        <p class="font-semibold leading-8">{!! $content !!}</p>
        <div {!! $attributes->merge(['class' => 'flex flex-wrap items-center pt-2.5 justify-end relative gap-3']) !!}>
            @if($button)
                <x-public.button :class_button="$class_button" :href="$href" :title="$title" :label="$label" />
            @endif
            <figure class="relative z-1">
                <img src="{!! $src !!}" alt="{!! $alt !!}" width="{!! $width_img !!}" height="{!! $heigth_img !!}">
            </figure>
            <figure class="{!! $class_img !!}">
                <img  src="{!! $src_patte !!}" alt="Illustration d'une patte d'un chat orange">
            </figure>
        </div>
    </div>
</section>
