@props(['animals'])

<tbody>

@foreach($animals as $animal)
    <x-admin.table.animals.tr
        src="{!! $animal->img_path !!}"
        src_db="{!! asset($animal->img_path) !!}"
        src_storage="{!! asset('storage/photos/animals/originals/'.$animal->img_path) !!}"
        name="{!! $animal->name !!}"
        type="{!! $animal->type !!}"
        state="{!! $this->enumNameToValue($animal->state) !!}"
        sexe="{!! $animal->sexe !!}"
        id="{!! $animal->id !!}"
        arrival_date="{!! $animal->arrival_date !!}"
    />
@endforeach

</tbody>
