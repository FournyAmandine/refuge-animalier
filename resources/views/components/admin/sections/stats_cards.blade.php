@props(['welcome', 'adopted', 'in', 'care', 'pending', 'draft'])

<section class="pt-20">
    <h3 class="title_section text-xl md:text-2xl font-medium underline decoration-orange-400 decoration-2 pb-2.5">Statistiques&nbsp;:</h3>
    <div class="flex gap-2 flex-wrap pb-5 sm:gap-5 lg:gap-4 xl:gap-6 text-center">
        <x-admin.dashboard.article_stats_card stat="Animaux accueillis" :number="$welcome"/>
        <x-admin.dashboard.article_stats_card stat="Animaux adoptés" :number="$adopted"/>
        <x-admin.dashboard.article_stats_card stat="Animaux au refuge" :number="$in"/>
        <x-admin.dashboard.article_stats_card stat="Animaux en soin" :number="$care"/>
        <x-admin.dashboard.article_stats_card stat="Animaux en attente d'adoption" :number="$pending"/>
        <x-admin.dashboard.article_stats_card stat="Animaux en attente de validation" :number="$draft"/>
    </div>
    <x-admin.button label="Exporter en PDF" href="#" title="Exporter vos statistiques en PDF" class="px-5"/>
</section>
