@props(['section_title',
        'content',
        'label',
        'title',
        'href',
        'px',
        'src',
        'alt',
        'width_img',
        'heigth_img',
        'src_patte',
        'flex',
        'position_x',
        'position_top'
        ])

<section class="pb-25">
    <h2 class="text-orange-600 font-[Baloo] font-extrabold text-xl pb-2.5">{!! $section_title !!}</h2>
    <div>
        <p class="font-semibold leading-8">{!! $content !!}</p>
        <div class="flex flex-wrap {!! $flex !!} items-center pt-2.5 justify-end relative gap-3">
            <x-public.button :padding_x="$px" :href="$href" :title="$title" :label="$label" />
            <figure>
                <img src="{!! $src !!}" alt="{!! $alt !!}" width="{!! $width_img !!}" height="{!! $heigth_img !!}">
            </figure>
            <figure>
                <img class="absolute {!! $position_top !!} {!! $position_x !!}" src="{!! $src_patte !!}" alt="Illustration d'une patte d'un chat orange">
            </figure>
        </div>
    </div>
</section>
