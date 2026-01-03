@props(['title_page', 'href', 'label', 'title_button'])

<section>
    <h3 class="sro">{!! $title_page !!}</h3>
    <div class="flex items-center justify-between flex-wrap gap-2">
        <div class="flex items-center justify-between gap-4 flex-wrap">
            <input type="search" wire:model.live="term" placeholder="{{ __('filter.search') }}"
                   class="bg-gray-300/60 rounded-xl px-4 py-4 w-64 focus:ring-2 focus:border-orange-600 search">
        </div>
        <x-admin.button href="{!! $href !!}" class="px-6 w-1/1 text-center sm:w-[240px]" label="{!! $label !!}"
                        title="{!! $title_button !!}"/>
    </div>
</section>
