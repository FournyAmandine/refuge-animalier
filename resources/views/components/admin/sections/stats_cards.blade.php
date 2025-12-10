<section class="pt-30">
    <h3 class="title_section text-xl md:text-2xl font-medium underline decoration-orange-400 decoration-2 pb-2.5">Statistiques&nbsp;:</h3>
    <div class="flex gap-2 flex-wrap pb-5 sm:gap-5 lg:gap-4 xl:gap-8">
        <x-admin.dashboard.article_stats_card stat="Animaux accueillis" number="12"/>
        <x-admin.dashboard.article_stats_card stat="Animaux adoptés" number="6"/>
        <x-admin.dashboard.article_stats_card stat="Animaux au refuge" number="17"/>
        <x-admin.dashboard.article_stats_card stat="Animaux en soins" number="2"/>
    </div>
    <x-admin.button label="Exporter en PDF" href="#" title="Exporter vos statistiques en PDF" class="px-5"/>
</section>
