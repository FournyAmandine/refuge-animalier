<x-public.app>
    <x-slot:title_page>
        Adopter
    </x-slot:title_page>
    <main class="contact_form pb-11 relative md:w-4/5 md:m-auto">
        <x-public.sections.intro title="Adoptez un de nos compagnons&nbsp;!" ariane="Adoption"/>
        @if(session('success'))
            <div class="text-center py-5 text-2xl">
                {{ session('success') }}
            </div>
        @endif
        <x-public.sections.form route="{!! route('public.adoptionpage.store') !!}">
            <x-public.form.adoption-form>
                <x-slot:options>
                    @foreach($animals as $animal)
                        <x-public.form.fields.option
                            value="{!! $animal->id !!}"
                            option_name="{!! $animal->name !!} - {!! $animal->race !!}"
                        />
                    @endforeach
                </x-slot:options>
            </x-public.form.adoption-form>
            <x-slot:text>
                Donnez à l’un de nos compagnons la chance de connaître la douceur d’un foyer, et découvrez à quel point leur
                gratitude est infinie.
            </x-slot:text>
            <x-slot:button_label>
                Envoyer la demande
            </x-slot:button_label>
        </x-public.sections.form>
        <img class="absolute bottom-[-1rem] px-5 scale-100 md:scale-150 md:bottom-[-2.4rem] md:left-[-5rem] origin-bottom" src="{!! asset('assets/img/chat_adoption.png') !!}"
             alt="Illustration d'un golden retriever" width="230" height="206">
    </main>
</x-public.app>


