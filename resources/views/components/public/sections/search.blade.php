<section class="flex justify-end pb-10">
    <h3 class="sro">{{ __('search.search_fields') }}</h3>
    <form action="{{ route('public.animals.index') }}" method="get" class="flex items-center pr-2">
        <input type="search" placeholder="{{ __('search.placeholder') }}" name="term" value="{{ request('term') }}"
           class="search rounded-xl py-2 w-1/1 md:w-[300px] focus:ring-2 focus:accent-orange-600 mr-10">
        <x-public.form.buttons.button class="text-orange-50 bg-orange-600 border-2 rounded-lg px-5 py-2.5 hover:scale-110 duration-300 transition-all" text="{{ __('search.search_fields') }}"/>
    </form>
    <x-public.button title="Réinitialiser la recherche" href="{!! route('public.animals.index') !!}" label="Réinitialiser" class_button="px-2"/>
</section>
