<x-public.app>
    <x-slot:title_page>
        Devenir bénévole
    </x-slot:title_page>
    <main class="contact_form pb-11 relative md:w-4/5 md:m-auto">
        <x-public.sections.intro title="Devenez bénévole&nbsp;!" ariane="Refuge/Bénévole"/>
        <x-public.sections.form>
            <div class="md:flex md:gap-5">
                <x-public.form.fields.input field_name="last_name" required="required" placeholder="Doe" label="Entrez votre nom"/>
                <x-public.form.fields.input field_name="first_name" required="required" placeholder="John" label="Entrez votre prénom"/>
            </div>
            <x-public.form.fields.input type="email" field_name="email" required="required" placeholder="John@doe.be" label="Entrez votre email"/>
            <x-public.form.fields.textarea field_name="message" label="Pourquoi devenir bénévole?" placeholder="J'aimerai devenir bénévole pour..."/>
            <x-slot:text>
                Rejoindre Les Pattes Heureuses, c’est bien plus que donner un peu de son temps : c’est offrir de la tendresse, du réconfort et une seconde chance à des animaux qui n’attendent qu’un regard bienveillant.  Devenez bénévole et partagez cette belle aventure humaine et animale à nos côtés !            </x-slot:text>
            <x-slot:button_label>
                Devenir bénévole
            </x-slot:button_label>
        </x-public.sections.form>
        <img class="absolute bottom-[-0.7rem] px-5 scale-100 md:scale-150 md:bottom-[-2.4rem] md:left-[-5rem] origin-bottom" src="{!! asset('assets/img/lapin_benevole.png') !!}" alt="Illustration d'un golden retriever" width="180" height="206">
    </main>
</x-public.app>


