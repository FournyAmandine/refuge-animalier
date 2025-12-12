@props(['name', 'type','state', 'sexe', 'id', 'arrival_date', 'src'])

<tr class="hover:bg-orange-200/20 border-b border-orange-200/70">
    <td class="text-center p-4"><img class="inline-block rounded-xl" width="100" src="{!! $src !!}" alt=""></td>
    <td class="text-center">{!! $name !!}</td>
    <td class="text-center">{!! $type !!}</td>
    <td class="text-center">{!! $state !!}</td>
    <td class="text-center">{!! $sexe !!}</td>
    <td class="text-center">{!! \Carbon\Carbon::parse($arrival_date)->locale('fr')->translatedFormat('d F Y') !!}</td>
    <td class="text-center">
        <div x-data="{open: false}">
            <button class="text-orange-600 text-3xl" @click="open = !open" data-test="animal-index-menu">...</button>
            <span x-show="open" class="absolute bg-gray-100 p-5 rounded-2xl flex flex-col">
                            <a class="border-b-3 border-orange-50" href="">Modifier</a>
                            <a href="#" wire:click="delete({!! $id !!})">Supprimer</a>
                        </span>

        </div>
    </td>
</tr>
