<div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
    <div class="bg-orange-50 p-10 rounded-xl border-2 border-orange-600"
        @click.outside="$dispatch('close_modal')">

        <p class="text-center text-xl pb-5">
            Voulez-vous vraiment supprimer cette tâche ?
        </p>

        <div class="flex gap-5 justify-center items-center">
            <button class="p-4 bg-orange-600 text-orange-50 rounded-xl hover:scale-110 hover:transition-all hover:duration-200" wire:click="delete()">
                Supprimer
            </button>

            <button class="hover:text-orange-600" wire:click="$dispatch('close_modal')">
                Retour
            </button>
        </div>
    </div>
</div>
