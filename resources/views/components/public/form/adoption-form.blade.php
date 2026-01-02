@props([
    'options'
])

<div  class="md:flex md:gap-5 md:flex-wrap">
    <x-public.form.fields.input field_name="last_name" required="required" placeholder="Doe" label="Entrez votre nom"/>
    <x-public.form.fields.input field_name="first_name" required="required" placeholder="John" label="Entrez votre prénom"/>
</div>
<div  class="md:flex md:gap-5 md:flex-wrap">
    <x-public.form.fields.input type="email" field_name="email" required="required" placeholder="John@doe.be" label="Entrez votre email"/>
    <x-public.form.fields.select field_name="civil_state" required="required" label="Sélectionnez l’état civile">
        <x-public.form.fields.option selected="selected" value="none" option_name="--Votre choix--"/>
        <x-public.form.fields.option value="married" option_name="Marié"/>
        <x-public.form.fields.option value="single" option_name="Célibataire"/>
        <x-public.form.fields.option value="couple" option_name="En couple&nbsp;(vivant sous le même toit)"/>
    </x-public.form.fields.select>
</div>
<div  class="md:flex md:flex-wrap md:gap-5">
    <x-public.form.fields.input field_name="street" required="required" placeholder="Rue du Spi"
                                label="Entrez votre rue"/>
    <x-public.form.fields.input type="number" field_name="number" required="required" placeholder="52"
                                label="Entrez votre numéro"/>
    <x-public.form.fields.input type="text" field_name="postal_code" required="required" placeholder="6976"
                                label="Entrez votre code postal"/>
</div>
<div class="md:flex md:gap-5 md:flex-wrap">
    <x-public.form.fields.input field_name="locality" required="required" placeholder="Bartogne"
                                label="Entrez votre localité"/>
    <x-public.form.fields.select field_name="animal_id" required="required" label="Sélectionnez votre compagnon">
        {!! $options !!}
    </x-public.form.fields.select>
</div>

<x-public.form.fields.textarea field_name="description_place" label="Décrivez votre lieu de vie"
                               placeholder="J'habite en campagne avec un grand jardin..."/>


