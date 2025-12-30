@props(['id', 'first_name', 'src', 'last_name', 'email', 'created_at', 'src_db', 'src_storage'])

<tr class="hover:bg-orange-200/20 border-b border-orange-200/70">
    @if(\Illuminate\Support\Str::startsWith($src, 'assets/img/'))
        <td class="text-center p-4">
            <a title="{{ __('volunteer_index.go_to_profile', ['name' => $first_name]) }}"
               href="{!! route('admin.volunteers.show', $id) !!}">
                <img class="inline-block rounded-xl hover:scale-110 transition-all duration-250 w-[100px] h-[66px] object-cover object-[50%_30%]"
                     width="100"
                     src="{!! $src_db !!}"
                     alt="{{ __('volunteer_index.image_alt', ['name' => $first_name]) }}">
            </a>
        </td>
    @else
        <td class="text-center p-4">
            <a title="{{ __('volunteer_index.go_to_profile', ['name' => $first_name]) }}"
               href="{!! route('admin.volunteers.show', $id) !!}">
                <img class="inline-block rounded-xl hover:scale-110 transition-all duration-250 w-[100px] h-[66px] object-cover object-[50%_30%]"
                     width="100"
                     src="{!! $src_storage !!}"
                     alt="{{ __('volunteer_index.image_alt', ['name' => $first_name]) }}">
            </a>
        </td>
    @endif

    <td class="text-center">
        <a class="hover:text-orange-600 hover:text-xl"
           href="{!! route('admin.volunteers.show', $id) !!}"
           title="{{ __('volunteer_index.go_to_profile', ['name' => $first_name]) }}">
            {!! $last_name !!}
        </a>
    </td>

    <td class="text-center">
        <a class="hover:text-orange-600 hover:text-xl"
           href="{!! route('admin.volunteers.show', $id) !!}"
           title="{{ __('volunteer_index.go_to_profile', ['name' => $first_name]) }}">
            {!! $first_name !!}
        </a>
    </td>

    <td class="text-center">{!! $email !!}</td>

    <td class="text-center">
        {!! \Carbon\Carbon::parse($created_at)->locale('fr')->translatedFormat('d F Y') !!}
    </td>

    <td class="text-center">
        <div x-data="{open: false}">
            <button class="text-orange-600 text-3xl text-center"
                    @click="open = !open"
                    @click.outside="open = false">
                ...
            </button>

            <span x-show="open"
                  class="absolute z-30 right-8 bg-orange-50 p-5 rounded-2xl text-xl flex flex-col gap-3 menu border-2 border-orange-600 [box-shadow:var(--shadow-xl)]">
                <div class="border-b-3 border-orange-600 pb-3 text-center">
                    <a class="p-2 hover:bg-orange-100/40 text-center rounded-lg"
                       href="{!! route('admin.volunteers.edit', $id) !!}">
                        {{ __('volunteer_index.edit') }}
                    </a>
                </div>

                <button class="hover:bg-orange-100/40 p-2 rounded-lg"
                        wire:click="toggleModal('delete', {{$id}})">
                    {{ __('volunteer_index.delete') }}
                </button>
            </span>
        </div>
    </td>
</tr>
