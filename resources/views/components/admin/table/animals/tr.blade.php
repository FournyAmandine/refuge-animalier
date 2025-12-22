@props(['name', 'type','state', 'sexe', 'id', 'arrival_date', 'src_db', 'src_storage', 'src'])

<tr class="hover:bg-orange-200/20 border-b border-orange-200/70 ">
    @if(\Illuminate\Support\Str::startsWith($src, 'assets/img/'))
        <td class="text-center p-4"><a href="{!! route('admin.animals.show', $id) !!}" title="Aller vers la page de {!! $name !!}"><img class="inline-block rounded-xl hover:scale-110 duration-250 transition-all w-[100px] h-[66px] object-cover" width="100" height="66" src="{!! $src_db !!}" alt="Image de notre petit compagnon {!! $name !!}"></a></td>
    @else
        <td class="text-center p-4"><a href="{!! route('admin.animals.show', $id) !!}" title="Aller vers la page de {!! $name !!}"><img class="inline-block rounded-xl hover:scale-110 duration-250 transition-all w-[100px] h-[66px] object-cover" width="100" height="66" src="{!! $src_storage !!}" alt="Image de notre petit compagnon {!! $name !!}"></a></td>
    @endif
    <td class="text-center"><a class="hover:text-xl hover:text-orange-600" title="Aller vers la page de {!! $name !!}" href="{!! route('admin.animals.show', $id) !!}">{!! $name !!}</a></td>
    <td class="text-center">{!! $type !!}</td>
    <td class="text-center">{!! $state !!}</td>
    <td class="text-center">{!! $sexe !!}</td>
    <td class="text-center">{!! \Carbon\Carbon::parse($arrival_date)->locale('fr')->translatedFormat('d F Y') !!}</td>
    <td class="text-center">
        <div x-data="{open: false}">
            <button class="text-orange-600 text-3xl text-center" @click="open = !open" @click.outside="open = false">
                ...
            </button>
            <span x-show="open"
                  class="absolute z-30 right-8 bg-orange-50 p-5 rounded-2xl text-xl flex flex-col gap-3 menu border-2 border-orange-600 [box-shadow:var(--shadow-xl)]">
                <div class="border-b-3 border-orange-600 pb-3 text-center">
                     <a class="p-2 hover:bg-orange-100/40 text-center rounded-lg" href="{!! route('admin.animals.edit', $id) !!}">Modifier</a>
                </div>
                <button class="hover:bg-orange-100/40 p-2 rounded-lg" href="#" wire:click="toggleModal('delete', {{$id}})">Supprimer</button>
            </span>
        </div>
    </td>
</tr>
