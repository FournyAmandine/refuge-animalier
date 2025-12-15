@props(['animals'])

<table {!! $attributes->merge(['class'=>'hidden min-[1370px]:table mt-10 rounded-xl overflow-hidden w-full space-y-2 min-[1920px]:max-w-[1280px] min-[1920px]:m-auto  [box-shadow:var(--shadow-xl)] border border-orange-200/70'])!!}>
    <x-admin.table.animals.thead/>
    <x-admin.table.animals.tbody :animals="$animals"/>
</table>
