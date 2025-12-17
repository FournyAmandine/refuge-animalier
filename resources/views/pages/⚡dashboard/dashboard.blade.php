<main class="admin lg:flex-1">
    <h2 class="pb-15 [font-size:var(--text-3xl)] md:[font-size:var(--text-4xl)] lg:[font-size:var(--text-6xl)] text-orange-600 text-center underline decoration-orange-400 decoration-3">Les pattes heureuses</h2>
    <div class="flex flex-col min-[922px]:flex-row min-[922px]:flex-wrap px-5 sm:px-8 md:px-14 md:justify-between lg:px-24 xl:px-36">
        <x-admin.sections.card_dashboard>
            <x-slot:class_button>w-1/1 text-center</x-slot:class_button>
            <x-slot:label>Voir les demandes</x-slot:label>
            <x-slot:title_button>Aller voir toutes les demandes</x-slot:title_button>
            <x-slot:title_section>Demandes d'adoption</x-slot:title_section>
            <x-admin.dashboard.article_message_card day="2" animal="Moka" contact="Sarah Deseurs" message="Souhaite adopter"/>
            <x-admin.dashboard.article_message_card day="4" animal="Frimousse" contact="Anne Bourguignon" message="Souhaite adopter"/>
            <x-admin.dashboard.article_message_card day="3" animal="Bunny" contact="Flora Deville" message="Souhaite adopter"/>
        </x-admin.sections.card_dashboard>
        <x-admin.sections.card_dashboard>
            <x-slot:class_button>w-1/1 text-center</x-slot:class_button>
            <x-slot:label>Voir les messages de contact</x-slot:label>
            <x-slot:title_button>Aller voir tous les messages de contact</x-slot:title_button>
            <x-slot:title_section>Messages de contact</x-slot:title_section>
            <x-admin.dashboard.article_message_card day="1" contact="Sarah Deseurs" message="Avez-vous reçu ma demande?"/>
            <x-admin.dashboard.article_message_card day="3" contact="Sarah Deseurs" message="Est-il possible de le voir? "/>
            <x-admin.dashboard.article_message_card day="5" contact="Sarah Deseurs" message="Bonjour, je voudrais voir Moka..."/>
        </x-admin.sections.card_dashboard>
        <x-admin.sections.card_dashboard>
            <x-slot:class_button>w-1/1 text-center</x-slot:class_button>
            <x-slot:label>Voir les tâches</x-slot:label>
            <x-slot:title_button>Voir les tâches à réaliser</x-slot:title_button>
            <x-slot:title_section>Tâches à faire</x-slot:title_section>
            <x-admin.dashboard.article_task_card task="Fiche à valider&nbsp;:"  number="4"/>
            <x-admin.dashboard.article_task_card task="Messages à lire&nbsp;:"  number="5"/>
            <x-admin.dashboard.article_task_card task="Demandes en attente&nbsp;:"  number="3"/>
        </x-admin.sections.card_dashboard>
    </div>
    <x-admin.sections.stats_cards/>
    <x-admin.sections.animals_card-list :animals="$animals" class_section="pt-30" class="grid grid-cols-[repeat(4,350px)] gap-5 overflow-x-scroll py-2.5 lg:grid-cols-[repeat(4,400px)]"/>
    <x-admin.sections.volunteers_card-list :volunteers="$volunteers" class="grid grid-cols-[repeat(4,350px)] gap-5 overflow-x-scroll py-2.5"/>
</main>



