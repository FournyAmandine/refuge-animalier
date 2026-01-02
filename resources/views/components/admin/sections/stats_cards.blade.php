@props(['welcome', 'adopted', 'in', 'care', 'pending', 'draft'])

<section class="pt-20">
    <h3 class="title_section text-xl md:text-2xl font-medium underline decoration-orange-400 decoration-2 pb-2.5">
        {{ __('dashboard.statistics') }}
    </h3>
    <div class="flex gap-2 flex-wrap pb-5 sm:gap-5 lg:gap-4 xl:gap-6 text-center">
        <x-admin.dashboard.article_stats_card stat="{{ __('dashboard.animals_welcomed') }}" :number="$welcome"/>
        <x-admin.dashboard.article_stats_card stat="{{ __('dashboard.animals_adopted') }}" :number="$adopted"/>
        <x-admin.dashboard.article_stats_card stat="{{ __('dashboard.animals_in_shelter') }}" :number="$in"/>
        <x-admin.dashboard.article_stats_card stat="{{ __('dashboard.animals_in_care') }}" :number="$care"/>
        <x-admin.dashboard.article_stats_card stat="{{ __('dashboard.animals_pending_adoption') }}" :number="$pending"/>
        <x-admin.dashboard.article_stats_card stat="{{ __('dashboard.animals_pending_validation') }}" :number="$draft"/>
    </div>
    <x-admin.button
        label="{{ __('dashboard.export_pdf') }}"
        href="#"
        title="{{ __('dashboard.export_statistics_pdf') }}"
        class="px-5"
    />
</section>
