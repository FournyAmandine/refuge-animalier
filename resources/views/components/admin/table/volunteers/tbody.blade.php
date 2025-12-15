@props(['volunteers'])

<tbody>

@foreach($volunteers as $volunteer)
    <x-admin.table.volunteers.tr
        src="{!! asset($volunteer->profil_path) !!}"
        id="{!! $volunteer->id !!}"
        first_name="{!! $volunteer->first_name !!}"
        last_name="{!! $volunteer->last_name !!}"
        email="{!! $volunteer->email !!}"
        created_at="{!! $volunteer->created_at !!}"
    />
@endforeach

</tbody>
