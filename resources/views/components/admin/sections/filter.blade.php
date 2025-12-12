<section>
    <h3 class="sro">Page d'index des animaux</h3>
    <div class="flex items-center justify-between flex-wrap gap-2">
        <div class="flex items-center justify-between gap-4 flex-wrap">
            <input type="search" wire:model.live="term" placeholder="Rechercher un jiri"
                   class="bg-gray-300/60 rounded-xl px-4 py-4 w-64 focus:ring-2 focus:border-orange-600 search">
            <x-admin.form.buttons.button text="Filtrer"
                                         class="w-1/1 bg-orange-600 hover:scale-105 text-orange-50 px-6 py-2.5 rounded-xl shadow transition"/>
        </div>
        <x-admin.button href="{!! route('admin.animals.create') !!}" class="px-6 w-1/1 text-center sm:w-[220px]" label="Ajouter un animal"
                        title="Aller vers la page de création d'un animal"/>
    </div>
</section>
