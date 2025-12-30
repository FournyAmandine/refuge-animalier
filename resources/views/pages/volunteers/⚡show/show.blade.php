@php
    use Carbon\Carbon;
@endphp

<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro
        ariane="{{ __('volunteer_show.breadcrumb', ['name' => $volunteer->first_name]) }}"
        title="{{ __('volunteer_show.title', ['first' => $volunteer->first_name, 'last' => $volunteer->last_name]) }}"
    />

    <section
        class="m-4 p-4 lg:mx-10 min-[1700px]:mx-30 md:p-8 bg-orange-50/7 [box-shadow:var(--shadow-xl)] rounded-xl md:flex animal md:gap-3 xl:flex-row xl:gap-10 min-[1920px]:max-w-[1280px] min-[1920px]:mx-100 min-[1920px]:m-auto lg:flex-col">
        <h3 class="sro">{{ $volunteer->first_name }} {{ $volunteer->last_name }}</h3>
        <div class="flex flex-row flex-wrap gap-5 flex-1">
            <div class="">
                <div class="flex pb-5 flex-row flex-wrap flex-1">
                    @if(\Illuminate\Support\Str::startsWith($volunteer->profil_path, 'assets/img/'))
                        <img class="rounded-xl w-[240px] h-[240px] mr-6 mb-10" src="{{ asset($volunteer->profil_path) }}"
                             alt="{{ __('volunteer_show.image_alt') }}">
                    @else
                        <img class="rounded-xl w-[240px] h-[240px] mr-6 mb-10" src="{{ asset('storage/photos/volunteers/originals/'.$volunteer->profil_path) }}"
                             alt="{{ __('volunteer_show.image_alt') }}">
                    @endif

                    <dl class="border-l-2 border-orange-600 pt-8 pl-6 flex flex-wrap gap-5 md:pt-0 lg:max-w-md xl:max-w-md">
                        <x-admin.dashboard.volunteers.definition class="w-[300px]" dt="{{ __('volunteer_show.last_name') }}" dd="{{ $volunteer->last_name }}"/>
                        <x-admin.dashboard.volunteers.definition class="w-[300px]" dt="{{ __('volunteer_show.first_name') }}" dd="{{ $volunteer->first_name }}"/>
                        <x-admin.dashboard.volunteers.definition class="w-[300px]" dt="{{ __('volunteer_show.age') }}" dd="{{ Carbon::parse($volunteer->birth_date)->age }} {{ __('volunteer_show.years') }}"/>
                        <x-admin.dashboard.volunteers.definition class="w-[300px]" dt="{{ __('volunteer_show.phone') }}" dd="{{ $volunteer->telephone }}"/>
                        <x-admin.dashboard.volunteers.definition dt="{{ __('volunteer_show.email') }}" dd="{{ $volunteer->email }}"/>
                        <div class="flex gap-4 items-center" x-data="{show:false}">
                            <p>{{ __('volunteer_show.password') }}:</p>
                            <p class="text-xl font-bold" x-text="show ? '{{ $volunteer->password }}' : '*******'"></p>
                            <img @click="show=!show" class="eye cursor-pointer" src="{{ asset('assets/img/icones/eye.svg') }}" alt="{{ __('volunteer_show.password_eye') }}">
                        </div>
                    </dl>
                </div>

                <dl class="pt-8 border-t-2 border-orange-600 flex flex-wrap">
                    <x-admin.dashboard.volunteers.definition dt="{{ __('volunteer_show.link_animals') }}" dd="{{ $volunteer->link_animal }}"/>
                </dl>
            </div>

            <div class="min-[1505px]:pl-4 flex-1">
                <p>{{ __('volunteer_show.availability') }}:</p>
                <table class="rounded-xl overflow-hidden w-full [box-shadow:var(--shadow-xl)] mt-3 border-collapse border-orange-600">
                    <thead>
                    <tr class="border-b border-orange-600">
                        <th class="border-r border-orange-600 px-4 py-2 rounded-l-lg">{{ __('volunteer_show.day') }}</th>
                        <th class="border-r border-orange-600 px-4 py-2">{{ __('volunteer_show.start') }}</th>
                        <th class="px-4 py-2 rounded-r-lg">{{ __('volunteer_show.end') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($availabilities as $availability)
                        <tr class="text-center">
                            <td class="border-r border-t border-orange-600 py-2.5">{{ $availability->day }}</td>
                            <td class="border-r border-t border-orange-600 py-2.5">{{ $availability->start }}</td>
                            <td class="border-t border-orange-600">{{ $availability->end }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <div class="pt-4 flex flex-col sm:flex-row gap-4 lg:justify-end px-4 lg:px-10 min-[1700px]:px-30 min-[1920px]:max-w-[1280px] min-[1920px]:px-0 min-[1920px]:m-auto">
        <x-admin.button class="w-1/1 text-center lg:w-1/3 2xl:w-1/5" href="{{ route('admin.volunteers.index') }}" label="{{ __('volunteer_show.see_all') }}" title="{{ __('volunteer._how.see_all_title') }}"/>
        <x-admin.button class="w-1/1 text-center modify lg:w-1/3 2xl:w-1/5" href="{{ route('admin.volunteers.edit',$volunteer->id) }}" label="{{ __('volunteer_show.edit') }}" title="{{ __('volunteer_show.edit_title') }}"/>
        <x-admin.button wire:click="delete({{ $volunteer->id }})" class="w-1/1 text-center delete lg:w-1/3 2xl:w-1/5" href="#" label="{{ __('volunteer_show.delete') }}" title="{{ __('volunteer_show.delete_title') }}"/>
    </div>
</main>
