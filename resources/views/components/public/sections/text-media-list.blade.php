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
        'position_x',
        'position_top',
        'items',
        'class_img',
        'button'=>true,
        'has_main_title'=>false,
        'class_div'
        ])

<section class="pb-20 lg:pb-40">
    <div class="flex flex-col {!! $class_div??"" !!}">
        <div class="md:max-w-[65%] lg:max-w-[55%] {!! $class_content??" " !!}">
            @if($has_main_title)
                <h3 class="text-orange-600 text-xl pb-2.5 pt-5 lg:text-2xl 2xl:text-4xl">{!! $section_title !!}</h3>
            @else
                <h2 class="text-orange-600 text-xl pb-2.5 pt-5 lg:text-2xl 2xl:text-4xl">{!! $section_title !!}</h2>
            @endif
            <p class="font-semibold leading-8 lg:text-lg 2xl:text-2xl 2xl:leading-12">{!! $content !!}</p>
            <ul class="pb-5 lg:text-lg  2xl:text-2xl 2xl:leading-10">
                @foreach($items as $item)
                    <x-public.list.list-item :item="$item"/>
                @endforeach
            </ul>
            @if($button)
                <x-public.button :class_button="$class_button" :href="$href" :title="$title" :label="$label"/>
            @endif
        </div>
        <div {!! $attributes->merge(['class' => 'flex flex-wrap items-center pt-2.5 justify-end relative gap-3 md:pt-8 md:items-center md:max-w-[65%]']) !!}>
            <figure class="relative z-1 lg:w-70">
                <img class="lg:w-1/1" src="{!! $src !!}" alt="{!! $alt !!}" width="{!! $width_img !!}" height="{!! $heigth_img !!}">
            </figure>
            <figure class="{!! $class_img !!}">
                <img src="{!! $src_patte !!}" alt="Illustration d'une patte d'un chat orange">
            </figure>
        </div>
    </div>
</section>
