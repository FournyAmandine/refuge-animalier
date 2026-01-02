@props([
    'options'
])

<div class="md:flex md:gap-5 md:flex-wrap">
    <x-public.form.fields.input
        field_name="last_name"
        required="required"
        placeholder="{{ __('public_adoption_form.placeholder_last_name') }}"
        label="{{ __('public_adoption_form.label_last_name') }}"
    />
    <x-public.form.fields.input
        field_name="first_name"
        required="required"
        placeholder="{{ __('public_adoption_form.placeholder_first_name') }}"
        label="{{ __('public_adoption_form.label_first_name') }}"
    />
</div>

<div class="md:flex md:gap-5 md:flex-wrap">
    <x-public.form.fields.input
        type="email"
        field_name="email"
        required="required"
        placeholder="{{ __('public_adoption_form.placeholder_email') }}"
        label="{{ __('public_adoption_form.label_email') }}"
    />
    <x-public.form.fields.select
        field_name="civil_state"
        required="required"
        label="{{ __('public_adoption_form.label_civil_state') }}"
    >
        <x-public.form.fields.option
            selected="selected"
            value="none"
            option_name="{{ __('public_adoption_form.option_none') }}"
        />
        <x-public.form.fields.option
            value="married"
            option_name="{{ __('public_adoption_form.option_married') }}"
        />
        <x-public.form.fields.option
            value="single"
            option_name="{{ __('public_adoption_form.option_single') }}"
        />
        <x-public.form.fields.option
            value="couple"
            option_name="{{ __('public_adoption_form.option_couple') }}"
        />
        <x-public.form.fields.option
            value="family"
            option_name="{{ __('public_adoption_form.option_family') }}"
        />
    </x-public.form.fields.select>
</div>

<div class="md:flex md:flex-wrap md:gap-5">
    <x-public.form.fields.input
        field_name="street"
        required="required"
        placeholder="{{ __('public_adoption_form.placeholder_street') }}"
        label="{{ __('public_adoption_form.label_street') }}"
    />
    <x-public.form.fields.input
        type="number"
        field_name="number"
        required="required"
        placeholder="{{ __('public_adoption_form.placeholder_number') }}"
        label="{{ __('public_adoption_form.label_number') }}"
    />
    <x-public.form.fields.input
        type="text"
        field_name="postal_code"
        required="required"
        placeholder="{{ __('public_adoption_form.placeholder_postal_code') }}"
        label="{{ __('public_adoption_form.label_postal_code') }}"
    />
</div>

<div class="md:flex md:gap-5 md:flex-wrap">
    <x-public.form.fields.input
        field_name="locality"
        required="required"
        placeholder="{{ __('public_adoption_form.placeholder_locality') }}"
        label="{{ __('public_adoption_form.label_locality') }}"
    />
    <x-public.form.fields.select
        field_name="animal_id"
        required="required"
        label="{{ __('public_adoption_form.label_select_animal') }}"
    >
        {!! $options !!}
    </x-public.form.fields.select>
</div>

<x-public.form.fields.textarea
    field_name="description_place"
    label="{{ __('public_adoption_form.label_description_place') }}"
    placeholder="{{ __('public_adoption_form.placeholder_description_place') }}"
/>
