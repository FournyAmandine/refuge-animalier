<x-public.app>
    <x-slot:title_page>
        {{ __('public_home.title_page') }}
    </x-slot:title_page>
    <main>
        <x-public.sections.introduction/>

        <x-public.sections.card-list :animals="$animals"
                                     class="grid grid-cols-[repeat(5,300px)] gap-6 overflow-x-scroll py-4"/>

        <x-public.sections.text-media
            class_section="pb-20 pt-26 lg:pb-40"
            class_div="md:flex-row-reverse md:gap-3 lg:gap-40 2xl:gap-80 md:pl-10 justify-between items-center"
            :has_main_title="false"
            section_title="{{ __('public_home.refuge.title') }}"
            content="{{ __('public_home.refuge.content') }}"
            class="flex-row-reverse md:flex-col-reverse "
            class_button="px-8 hover:scale-110 duration-300 transition-all"
            :button="true"
            href="{!! route('public.aboutpage') !!}"
            title="{{ __('public_home.refuge.button_title') }}"
            label="{{ __('public_home.refuge.button') }}"
            :src="asset('assets/img/chien_1.png')"
            alt="{{ __('public_home.refuge.img_alt') }}"
            class_img="absolute left-7 top-[-3rem] md:left-16 md:top-[-1.5rem]"
            class_content="md:pl-10"
        />

        <x-public.sections.text-media
            :has_main_title="false"
            class_div="md:flex-row justify-between md:gap-3 lg:gap-40 2xl:gap-80 md:pl-10 items-center"
            section_title="{{ __('public_home.volunteer.title') }}"
            content="{{ __('public_home.volunteer.content') }}"
            class_button="px-3 hover:scale-110 duration-300 transition-all"
            href="{!! route('public.volunteerpage') !!}"
            title="{{ __('public_home.volunteer.button_title') }}"
            label="{{ __('public_home.volunteer.button') }}"
            :button="true"
            :src="asset('assets/img/chien_2.png')"
            alt="{{ __('public_home.volunteer.img_alt') }}"
            class_img="absolute right-0 top-[-5rem] md:right-10 md:top-[-2rem]"
            class="md:flex-col-reverse"
        />
    </main>
</x-public.app>
