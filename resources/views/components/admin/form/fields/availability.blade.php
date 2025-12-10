@props(['label', 'field_name'])

<div class="border-2 border-orange-600/80 bg-orange-600/10 rounded-lg p-2 flex justify-between w-1/1 md:w-[48%] lg:w-1/1 xl:w-[48%]" x-data="{ active: false }">
    <x-admin.form.fields.input_checkbox class_input="w-5 h-5 check" field_name="{!! $field_name !!}" label="{!! $label !!}"/>
    <x-admin.form.fields.availability_hours/>
</div>

