@props(['id', 'first_name', 'src', 'last_name', 'email', 'created_at'])

<tr class="hover:bg-orange-200/20 border-b border-orange-200/70">
    <td class="text-center p-4"><a title="Aller vers la page de {!! $first_name !!}" href="{!! route('admin.animals.show', $id) !!}"><img class="inline-block rounded-xl hover:scale-110 transition-all duration-250" width="100" src="{!! $src !!}" alt="Image de votre bénévole {!! $first_name !!}"></a></td>
    <td class="text-center"><a class="hover:text-orange-600 hover:text-xl" href="{!! route('admin.volunteers.index') !!}" title="Aller vers la page de {!! $first_name !!}">{!! $last_name!!}</a></td>
    <td class="text-center"><a class="hover:text-orange-600 hover:text-xl" href="{!! route('admin.volunteers.index') !!}" title="Aller vers la page de {!! $first_name !!}">{!! $first_name !!}</a></td>
    <td class="text-center">{!! $email !!}</td>
    <td class="text-center">{!! \Carbon\Carbon::parse($created_at)->locale('fr')->translatedFormat('d F Y') !!}</td>
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
