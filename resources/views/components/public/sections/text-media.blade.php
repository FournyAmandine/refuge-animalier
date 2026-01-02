@props(['section_title',
        'content',
        'label',
        'title',
        'href',
        'class_button',
        'src',
        'alt',
        'flex',
        'position_x',
        'position_top',
        'button'=>true,
        'class_img',
        'has_main_title'=>false,
        'class_section',
        'class_div',
        'class_content'
        ])

<section class="{!! $class_section?? 'pb-20 lg:pb-40'!!}">
    <div class="flex flex-col {!! $class_div??"" !!}">
        <div class="md:max-w-[65%] lg:max-w-[55%] {!! $class_content??" " !!}">
            @if($has_main_title)
                <h3 class="text-orange-600 text-xl pb-2.5 pt-5 lg:text-2xl 2xl:text-4xl">{!! $section_title !!}</h3>
            @else
                <h2 class="text-orange-600 font-extrabold text-xl pb-2.5 pt-5 lg:text-2xl 2xl:text-4xl">{!! $section_title !!}</h2>
            @endif
            <p class="font-semibold leading-8 pb-5 lg:text-lg 2xl:text-2xl 2xl:leading-12">{!! $content !!}</p>
                @if($button)
                    <x-public.button :class_button="$class_button" :href="$href" :title="$title" :label="$label"/>
                @endif
        </div>
        <div {!! $attributes->merge(['class' => 'flex flex-wrap items-center pt-2.5 justify-end relative gap-3 md:pt-8 md:items-center md:max-w-[65%]']) !!}>
            <figure class="relative z-1 md:pl-3 lg:w-70">
                <img class="lg:w-1/1" src="{!! $src !!}" alt="{!! $alt !!}">
            </figure>
            <figure class="{!! $class_img !!} paw">
                <img src="{!! asset('assets/img/patte-left_medium.svg') !!}" alt="{!! __('public_animals_index.paw_icon_alt') !!}">
            </figure>
        </div>
    </div>
</section>
