<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Tâches" title="Vos tâches"/>
    <div class="flex justify-end px-8 md:px-14 lg:px-24 2xl:px-35">
        <x-admin.button href="#" label="Ajouter une tâche" title="Ajouter une nouvelle tâche" class="px-6"/>

    </div>
    <section class="2xl:mx-10">
        <h3 class="title_section pb-5 lg:text-2xl">À réaliser</h3>
        @if($tasks_undone)
            @foreach($tasks_undone as $task)
                <x-admin.tasks.article_card :wire:key="'task-'.$task->id" done="{!! $task->done !!}"
                                            class="border-red-600" id="{!! $task->id !!}"
                                            label="{!! $task->task_name !!}"
                                            day="{!! \Carbon\Carbon::parse($task->created_at)->day !!}"
                                            field_name="{!! $task->task_name !!}"
                />
            @endforeach
        @else
            <p>Vous avez fait toutes vos tâches ! </p>
        @endif
    </section>
    <section class="pt-15 2xl:mx-10">
        <h3 class="title_section pb-5 lg:text-2xl">Dejà réalisées</h3>
        @foreach($tasks_done as $task)
            <x-admin.tasks.article_card :wire:key="'task-'.$task->id" done="{!! $task->done !!}"
                                        class="border-green-600" id="{!! $task->id !!}"
                                        label="{!! $task->task_name !!}"
                                        day="{!! \Carbon\Carbon::parse($task->created_at)->day !!}"
                                        field_name="{!! $task->task_name !!}"
            />
        @endforeach
    </section>
    @if($isOpenCreateModal)
        <x-admin.modal.general>
            <x-slot:title>
                Créer une tâche
            </x-slot:title>
            <x-slot:content>

            </x-slot:content>
        </x-admin.modal.general>
    @endif
    @if($isOpenEditModal)
        <x-admin.modal.general>

        </x-admin.modal.general>
    @endif
    @if($isOpenDeleteModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'delete' })">
            <x-slot:title>
                Voulez vous vraiment supprimer&nbsp;: <span class="menu underline decoration-orange-400  decoration-2 text-xl">{{$chosenTask->task_name}}</span>?
            </x-slot:title>
            <x-slot:content>
                <div class="flex gap-5 justify-center items-center">
                    <button class="p-4 bg-orange-600 text-orange-50 rounded-xl hover:scale-110 hover:transition-all hover:duration-200" wire:click="delete()">
                        Supprimer
                    </button>

                    <button class="hover:text-orange-600" wire:click="toggleModal('delete')">
                        Retour
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif
</main>
