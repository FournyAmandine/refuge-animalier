@props(['name', 'animal', 'day', 'label', 'id'])

<article {!! $attributes->merge([
    'class' => 'relative hover:scale-105 hover:duration-200 hover:transition-all flex flex-wrap justify-between items-center border-2 rounded-lg p-2.5 [box-shadow:var(--shadow-xl)] mb-5 min-[1920px]:max-w-[64rem]'
]) !!}>

    <button
        class="absolute inset-0"
        wire:click="toggleModal('show', {{ $id }})"
        title="{{ __('adoption.view_request_title') }}">
    </button>

    <div class="pb-2.5">
        <h4 class="lg:text-xl">{{ $name }}</h4>
        <p class="text-sm">
            {{ __('adoption.wants_to_adopt') }} {{ $animal }}
        </p>
    </div>

    <p class="text-sm">
        {{ __('adoption.days_ago', ['day' => $day]) }}
    </p>

    <x-admin.modal.button
        wire:click="toggleModal('show', {{ $id }})"
        title="{{ __('adoption.view_request_title') }}"
        label="{{ $label }}"
        class="pr-3 pl-15 validate"
    />
</article>
