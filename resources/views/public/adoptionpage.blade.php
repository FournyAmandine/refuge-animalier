<x-public.app>
    <x-slot:title_page>
        Adopter
    </x-slot:title_page>
    <main class="contact_form pb-11 relative">
        <x-public.sections.intro title="Adoptez un de nos compagnons&nbsp;!" ariane="Adoption"/>
        <x-public.sections.form>
            <x-public.form.adoption-form/>
            <x-slot:text>
                Donnez à l’un de nos compagnons la chance de connaître la douceur d’un foyer, et découvrez à quel point leur
                gratitude est infinie.
            </x-slot:text>
            <x-slot:button_label>
                Envoyer la demande
            </x-slot:button_label>
        </x-public.sections.form>
        <img class="absolute bottom-[-1rem] px-5" src="{!! asset('assets/img/chat_adoption.png') !!}"
             alt="Illustration d'un golden retriever" width="230" height="206">
    </main>
</x-public.app>


