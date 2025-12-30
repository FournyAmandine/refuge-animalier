@props(['tasks'])


<div class="border rounded-xl border-orange-600 [box-shadow:var(--shadow-xl)] p-5 todo mb-8 md:w-[48%] lg:w-1/1 xl:w-[48%] flex flex-col justify-between">
    <div class="flex items-start gap-2">
        <h3 class="title_section text-2xl font-medium underline decoration-orange-400 decoration-2 pb-4"> {{ __('dashboard.your_tasks') }}</h3>
        <img src="{!! asset('assets/img/small_paw.svg') !!}" alt="{{ __('dashboard.small_paw') }}">
    </div>
    @foreach($tasks as $task)
        <x-admin.dashboard.article_task_card task="{!! $task->task_name !!}"  number="{!! \Carbon\Carbon::parse($task->created_at)->day !!}"/>
    @endforeach
    <div class="flex flex-col items-center">
        <x-admin.button href="{!! route('admin.tasks.index') !!}" title="{{ __('dashboard.go_see_all_tasks') }}" label="{{ __('dashboard.see_tasks') }}" class="w-1/1 text-center"/>
    </div>
</div>

