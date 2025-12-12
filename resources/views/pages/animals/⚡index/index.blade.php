<main class="lg:flex-1 bg-orange-50/30">
        <x-admin.sections.intro ariane="Animaux" title="Vos animaux"/>
        <x-admin.sections.filter/>
        <x-admin.sections.cards_table :animals="$animals"/>
    <div class="p-10 md:p-25">
        {!! $animals->links() !!}
    </div>
</main>
