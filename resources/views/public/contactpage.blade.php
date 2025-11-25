<x-public.app>
    <x-slot:title_page>
        Contact
    </x-slot:title_page>
    <main class="contact_form pb-11 relative">
        <x-public.sections.intro title="Contactez-nous&nbsp;!" ariane="Contact"/>
        <x-public.sections.form>
            <x-public.form.fields.input field_name="last_name" required="required" placeholder="Doe" label="Entrez votre nom"/>
            <x-public.form.fields.input field_name="first_name" required="required" placeholder="John" label="Entrez votre prénom"/>
            <x-public.form.fields.input type="email" field_name="email" required="required" placeholder="John@doe.be" label="Entrez votre email"/>
            <x-public.form.fields.textarea field_name="message" label="Entrez votre message" placeholder="Je vous contacte pour savoir..."/>
            <x-slot:text>
                Si vous avez une question concernant un animal, la procédure d’adoption ou autre, n’hésitez pas à nous contacter et nous répondrons dans les plus bref délais
            </x-slot:text>
            <x-slot:button_label>
                Envoyer le message
            </x-slot:button_label>
        </x-public.sections.form>
        <img class="absolute bottom-[-1.63rem] px-5" src="{!! asset('assets/img/chien_contact.png') !!}" alt="Illustration d'un golden retriever" width="180" height="206">
    </main>
</x-public.app>


