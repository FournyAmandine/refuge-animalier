@php
    $titles_col = [
        ['label'=>__('animal_index.photo'), 'tri'=>false],
        ['label'=>__('animal_index.name'), 'tri'=>'name'],
        ['label'=>__('animal_index.type'), 'tri'=>'type'],
        ['label'=>__('animal_index.status'), 'tri'=>'state'],
        ['label'=>__('animal_index.sexe'), 'tri'=>'sexe'],
        ['label'=>__('animal_index.arrival'), 'tri'=>'created_at'],
        ['label'=>__('animal_index.actions'), 'tri'=>false],
    ];
@endphp

<thead class="bg-orange-300 rounded-xl">
<tr>
    @foreach($titles_col as $title_col)
        <th scope="col" class="py-4 px-6 text-center font-semibold">
            <div class="flex items-center justify-center">
                {!! $title_col['label'] !!}
                @if($title_col['tri'])
                    <button wire:click="sortBy('{{ $title_col['tri'] }}')">
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="#401B03" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                    </button>
                @endif
            </div>
        </th>
    @endforeach
</tr>
</thead>
