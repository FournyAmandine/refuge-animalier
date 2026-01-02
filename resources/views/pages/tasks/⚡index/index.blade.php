<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro
        ariane="{{ __('task.breadcrumb') }}"
        title="{{ __('task.title') }}"
    />

    <div class="flex justify-end px-8 md:px-14 lg:px-24 2xl:px-35">
        <x-admin.modal.button wire:click="toggleModal('create')" class="px-6"
                              title="{{ __('task.create_title') }}"
                              label="{{ __('task.create_label') }}"
        />
    </div>

    <section class="2xl:mx-10">
        <h3 class="title_section pb-5 lg:text-2xl">{{ __('task.to_do') }}</h3>
        @if($tasks_undone)
            @forelse($tasks_undone as $task)
                <x-admin.tasks.article_card
                    :wire:key="'task-'.$task->id"
                    done="{{ $task->done }}"
                    class="border-red-600"
                    id="{{ $task->id }}"
                    label="{{ $task->task_name }}"
                    day="{{ \Carbon\Carbon::parse($task->created_at)->day }}"
                    field_name="{{ $task->task_name }}"
                />
            @empty
                <p class="text-center text-xl">{{ __('task.no_undone') }}</p>
            @endforelse
        @else
            <p>{{ __('task.all_done') }}</p>
        @endif
    </section>

    <section class="pt-15 2xl:mx-10">
        <h3 class="title_section pb-5 lg:text-2xl">{{ __('task.done') }}</h3>
        @forelse($tasks_done as $task)
            <x-admin.tasks.article_card
                :wire:key="'task-'.$task->id"
                done="{{ $task->done }}"
                class="border-green-600"
                id="{{ $task->id }}"
                label="{{ $task->task_name }}"
                day="{{ \Carbon\Carbon::parse($task->created_at)->day }}"
                field_name="{{ $task->task_name }}"
            />
        @empty
            <p class="text-center text-xl">{{ __('task.no_done') }}</p>
        @endforelse
    </section>

    @if($isOpenCreateModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'create' })" class="lg:text-2xl pb-10 text-orange-600 underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold">
            <x-slot:title>
                {{ __('task.create_title') }}
            </x-slot:title>
            <x-slot:content>
                <div class="flex justify-center flex-col">
                    <form method="post" wire:submit.prevent="store">
                        @csrf
                        <x-admin.form.fields.input
                            field_name="task_name"
                            wire:model="form.task_name"
                            placeholder="{{ __('task.create_placeholder') }}"
                            :required="true"
                            label="{{ __('task.create_label_input') }}"
                        />
                        <x-admin.form.buttons.button
                            class="mt-4 text-orange-50 lg:text-xl bg-orange-600 border-2 rounded-lg px-10 py-2 hover:scale-110 duration-300 transition-all"
                            text="{{ __('task.create_button') }}"
                        />
                    </form>
                    <button
                        class="pt-4 hover:text-orange-600 hover:text-xl hover:duration-200 text-center underline decoration-orange-400 decoration-2"
                        wire:click="toggleModal('create')">{{ __('task.cancel') }}
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif

    @if($isOpenEditModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'edit' })" class="lg:text-2xl pb-10 text-orange-600 underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold">
            <x-slot:title>
                {{ __('task.edit_title') }}
            </x-slot:title>
            <x-slot:content>
                <div class="flex justify-center flex-col">
                    <form method="post" wire:submit.prevent="save">
                        @csrf
                        <x-admin.form.fields.input
                            field_name="task_name"
                            wire:model="form.task_name"
                            placeholder="{{ __('task.edit_placeholder') }}"
                            :required="true"
                            label="{{ __('task.edit_label_input') }}"
                        />
                        <x-admin.form.buttons.button
                            class="text-orange-50 lg:text-xl bg-orange-600 border-2 rounded-lg px-10 py-2 hover:scale-110 duration-300 transition-all"
                            text="{{ __('task.edit_button') }}"
                        />
                    </form>
                    <button
                        class="pt-4 hover:text-orange-600 hover:text-xl hover:duration-200 text-center underline decoration-orange-400 decoration-2"
                        wire:click="toggleModal('edit')">{{ __('task.cancel') }}
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif

    @if($isOpenDeleteModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'delete' })">
            <x-slot:title>
                {{ __('task.delete_confirm', ['task' => $chosenTask->task_name]) }}
            </x-slot:title>
            <x-slot:content>
                <div class="flex gap-5 justify-center items-center">
                    <button
                        class="p-4 bg-orange-600 text-orange-50 rounded-xl hover:scale-110 hover:transition-all hover:duration-200"
                        wire:click="delete()">
                        {{ __('task.delete') }}
                    </button>
                    <button class="hover:text-orange-600 hover:text-xl hover:duration-200"
                            wire:click="toggleModal('delete')">
                        {{ __('task.cancel') }}
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif
</main>
