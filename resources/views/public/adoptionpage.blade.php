<x-public.app>
    <x-slot:title_page>
        Adopter
    </x-slot:title_page>
    <main class="contact_form pb-11 relative">
        <x-public.sections.intro title="Adoptez un de nos compagnons&nbsp;!" ariane="Adoption"/>
        <x-public.sections.form>
            <x-public.form.fields.input field_name="last_name" required="required" placeholder="Doe" label="Entrez votre nom"/>
            <x-public.form.fields.input field_name="first_name" required="required" placeholder="John" label="Entrez votre prénom"/>
            <x-public.form.fields.input type="email" field_name="email" required="required" placeholder="John@doe.be" label="Entrez votre email"/>
            <x-public.form.fields.select field_name="civile" required="required" label="Sélectionnez l’état civile">
                <x-public.form.fields.option selected="selected" value="none" option_name="--Votre choix--"/>
                <x-public.form.fields.option value="married" option_name="Marié"/>
                <x-public.form.fields.option value="single" option_name="Célibataire"/>
                <x-public.form.fields.option value="couple" option_name="En couple&nbsp;(vivant sous le même toit)"/>
            </x-public.form.fields.select>
            <x-public.form.fields.input field_name="street" required="required" placeholder="Rue du Spi" label="Entrez votre rue"/>
            <x-public.form.fields.input type="number" field_name="numero" required="required" placeholder="52" label="Entrez votre numéro de maison"/>
            <x-public.form.fields.input type="text" field_name="postal" required="required" placeholder="6976" label="Entrez votre code postal"/>
            <x-public.form.fields.input field_name="city" required="required" placeholder="Bartogne" label="Entrez votre localité"/>
            <x-public.form.fields.textarea field_name="message" label="Décrivez votre lieu de vie" placeholder="J'habite en campagne avec un grand jardin..."/>
            <x-public.form.fields.select field_name="companion" required="required" label="Sélectionnez votre nouveau compagnon">
                <x-public.form.fields.option selected="selected" value="none" option_name="--Votre choix--"/>
                <x-public.form.fields.option value="charly" option_name="Charly"/>
                <x-public.form.fields.option value="frimousse" option_name="Frimousse"/>
                <x-public.form.fields.option value="happy" option_name="Happy"/>
                <x-public.form.fields.option value="panpan" option_name="Panpan"/>
            </x-public.form.fields.select>
            <x-slot:text>
                Donnez à l’un de nos compagnons la chance de connaître la douceur d’un foyer, et découvrez à quel point leur gratitude est infinie.
            </x-slot:text>
            <x-slot:button_label>
                Envoyer la demande
            </x-slot:button_label>
        </x-public.sections.form>
        <img class="absolute bottom-[-1rem] px-5" src="{!! asset('assets/img/chat_adoption.png') !!}" alt="Illustration d'un golden retriever" width="230" height="206">
    </main>
</x-public.app>


