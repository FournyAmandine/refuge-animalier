@php
    $history = [
        __('public_about.history_1'),
        __('public_about.history_2'),
        __('public_about.history_3'),
        __('public_about.history_4')
    ];

    $actions = [
        __('public_about.actions_1'),
        __('public_about.actions_2'),
        __('public_about.actions_3'),
        __('public_about.actions_4'),
        __('public_about.actions_5')
    ];
@endphp

<x-public.app>
    <x-slot:title_page>
        {{ __('public_about.title_page') }}
    </x-slot:title_page>

    <main>
        <x-public.sections.intro
            title="{{ __('public_about.intro_title') }}"
            ariane="{{ __('public_about.intro_ariane') }}"
        />

        <x-public.sections.text-media-list
            :has_main_title="true"
            section_title="{{ __('public_about.history_title') }}"
            content="{{ __('public_about.history_content') }}"
            class_button="px-3 hover:scale-110 duration-300 transition-all"
            class_div="md:flex-row justify-between md:gap-3 lg:gap-40 2xl:gap-80 md:pl-10"
            href="{!! route('public.adoptionpage') !!}"
            title="{{ __('public_about.history_button_title') }}"
            label="{{ __('public_about.history_button_label') }}"
            :button="true"
            :src="asset('assets/img/chat_1.png')"
            alt="{{ __('public_about.history_img_alt') }}"
            width_img="170"
            heigth_img="223"
            :src_patte="asset('assets/img/patte-right_medium.svg')"
            :items="$history"
            class_img="absolute right-0 top-[-3rem] md:top-10 lg:top-10 lg:right-20"
        />

        <x-public.sections.text-media
            :has_main_title="true"
            section_title="{{ __('public_about.team_title') }}"
            class_div="md:flex-row-reverse md:gap-3 lg:items-center justify-between lg:gap-40 2xl:gap-80 md:pl-10"
            content="{{ __('public_about.team_content') }}"
            class_button="px-5 hover:scale-110 duration-300 transition-all"
            class="flex-row-reverse"
            :button="true"
            href="{!! route('public.volunteerpage') !!}"
            title="{{ __('public_about.team_button_title') }}"
            label="{{ __('public_about.team_button_label') }}"
            :src="asset('assets/img/chat_2.png')"
            alt="{{ __('public_about.team_img_alt') }}"
            width_img="160"
            heigth_img="185"
            class_img="absolute left-2 top-[-4rem] md:top-[-1rem] lg:top-10 lg:left-25"
            :src_patte="asset('assets/img/patte-left_medium.svg')"
        />

        <x-public.sections.text-media-list
            :has_main_title="true"
            section_title="{{ __('public_about.actions_title') }}"
            content="{{ __('public_about.actions_content') }}"
            class_div="md:flex-row justify-between 2xl:items-center md:gap-3 lg:gap-40 2xl:gap-80 md:pl-10"
            :button="false"
            :src="asset('assets/img/chat_3.png')"
            alt="{{ __('public_about.actions_img_alt') }}"
            width_img="170"
            heigth_img="170"
            :src_patte="asset('assets/img/patte-right_medium.svg')"
            :items="$actions"
            class_img="absolute right-0 top-[-4rem] md:top-3 lg:top-10 lg:right-20"
        />

        <x-public.sections.text-media
            :has_main_title="true"
            section_title="{{ __('public_about.philosophy_title') }}"
            content="{{ __('public_about.philosophy_content') }}"
            class_button="px-4.5 hover:scale-110 duration-300 transition-all"
            class_div="md:flex-row-reverse md:gap-3 lg:items-center justify-between lg:gap-40 2xl:gap-80 md:pl-10"
            class="flex-row-reverse"
            :button="true"
            href="{!! route('public.animals.index') !!}"
            title="{{ __('public_about.philosophy_button_title') }}"
            label="{{ __('public_about.philosophy_button_label') }}"
            :src="asset('assets/img/chat_4.png')"
            alt="{{ __('public_about.philosophy_img_alt') }}"
            width_img="140"
            heigth_img="190"
            class_img="absolute left-2 top-[-4rem] md:top-[-2rem] lg:top-5 lg:left-20"
            :src_patte="asset('assets/img/patte-left_medium.svg')"
        />

    </main>
</x-public.app>
