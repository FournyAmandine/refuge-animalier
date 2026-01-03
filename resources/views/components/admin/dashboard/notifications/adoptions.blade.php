@props(['adoptions'])

<div class="border flex flex-col rounded-xl border-orange-600 [box-shadow:var(--shadow-xl)] p-5 todo mb-8 md:w-[48%] lg:w-1/1 xl:w-[48%]">
    <div class="flex items-start gap-2">
        <h3 class="title_section text-2xl font-medium underline decoration-orange-400 decoration-2 pb-4">
            {{ __('dashboard.adoption_requests') }}
        </h3>
        <img src="{!! asset('assets/img/small_paw.svg') !!}" alt="{{ __('dashboard.small_paw') }}">
    </div>

    @foreach($adoptions as $adoption)
        <x-admin.dashboard.article_message_card
            day="{!! \Carbon\Carbon::parse($adoption->created_at)->day !!}"
            animal="{!! $adoption->animal->name !!}"
            contact="{!! $adoption->first_name !!} {!! $adoption->last_name !!}"
            message="{{ __('dashboard.wants_to_adopt') }}"
        />
    @endforeach

    <div class="flex flex-col items-center mt-auto">
        <x-admin.button
            href="{!! route('admin.adoptions.index') !!}"
            title="{{ __('dashboard.go_see_all_requests') }}"
            label="{{ __('dashboard.see_requests') }}"
            class="w-1/1 text-center"
        />
    </div>
</div>
