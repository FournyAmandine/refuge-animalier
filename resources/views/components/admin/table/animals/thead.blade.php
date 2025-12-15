

@php
    $titles_col =[
        ['label'=>'Photo', 'tri'=>'false'],
        ['label'=>'Nom', 'tri'=>'true'],
        ['label'=>'Type', 'tri'=>'true'],
        ['label'=>'Statut', 'tri'=>'true'],
        ['label'=>'Sexe', 'tri'=>'true'],
        ['label'=>'Arrivée', 'tri'=>'true'],
        ['label'=>'Actions', 'tri'=>'false'],
        ]
@endphp


<thead class="bg-orange-300 rounded-xl">
<tr>
    @foreach($titles_col as $title_col)
        <th scope="col" class="py-4 px-6 text-center font-semibold">
            <div class="flex items-center justify-center">
                {!! $title_col['label'] !!}
                @if($title_col['tri'] == 'true')
                    <a href="#">
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="#401B03" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/></svg>
                    </a>
                @endif
            </div>
        </th>
    @endforeach
</tr>
</thead>
