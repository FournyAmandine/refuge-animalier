<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="Tâches" title="Vos tâches"/>
    <div class="flex justify-end px-25">
        <x-admin.button href="#" label="Ajouter une tâche" title="Ajouter une nouvelle tâche" class="px-6"/>

    </div>
    <section>
        <h3 class="title_section pb-5 lg:text-2xl">À réaliser</h3>
        @foreach($tasks_undone as $task)
            <x-admin.tasks.article_card  :wire:key="'task-'.$task->id" done="{!! $task->done !!}" class="border-red-600" id="{!! $task->id !!}" label="{!! $task->task_name !!}" day="{!! \Carbon\Carbon::parse($task->created_at)->day !!}"
                                         field_name="{!! $task->task_name !!}"
            />
        @endforeach
    </section>
    <section class="pt-15">
        <h3 class="title_section pb-5 lg:text-2xl">Dejà réalisées</h3>
        @foreach($tasks_done as $task)
            <x-admin.tasks.article_card :wire:key="'task-'.$task->id" done="{!! $task->done !!}" class="opacity-50 border-green-600" id="{!! $task->id !!}" label="{!! $task->task_name !!}" day="{!! \Carbon\Carbon::parse($task->created_at)->day !!}" field_name="{!! $task->task_name !!}"
            />
        @endforeach
    </section>
</main>
