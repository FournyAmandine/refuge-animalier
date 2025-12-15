@props(['animals'])

<tbody>

@foreach($animals as $animal)
    <x-admin.table.animals.tr
        src="{!! asset($animal->img_path) !!}"
        name="{!! $animal->name !!}"
        type="{!! $animal->type !!}"
        state="{!! $animal->state !!}"
        sexe="{!! $animal->sexe !!}"
        id="{!! $animal->id !!}"
        arrival_date="{!! $animal->arrival_date !!}"
    />
@endforeach

</tbody>
