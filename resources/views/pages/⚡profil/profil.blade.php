<main class="lg:flex-1 bg-orange-50/30 font-semibold">
    <x-admin.sections.intro ariane="{{ __('profil.ariane') }}" title="{{ __('profil.title') }}"/>

    <section class="text-right flex justify-between items-center gap-6 2xl:text-left">
        <img class="w-1/3" src="{{ asset('assets/img/icones/profil_large.png') }}" alt="{{ __('profil.profile_image') }}">
        <div class="flex flex-col gap-2 2xl:flex-row 2xl:gap-20 w-1/1">
            <div class="2xl:gap-3.5 2xl:flex 2xl:flex-col">
                <h3 class="title_section text-3xl">{{ $user->name }}</h3>
                <p class="text-xl">{{ $user->email }}</p>
            </div>
            <div class="2xl:gap-3.5 2xl:flex 2xl:flex-col 2xl:text-xl 2xl:border-l-1 2xl:border-orange-600 pl-6">
                <p>{{ __('profil.refuge_admin') }}</p>
                <p>{{ __('profil.member_since', ['date' => \Carbon\Carbon::parse($user->created_at)->locale(app()->getLocale())->translatedFormat('d F Y')]) }}</p>
            </div>
        </div>
    </section>

    <section class="pt-18">
        <h3 class="text-xl 2xl:text-2xl underline decoration-1 decoration-orange-400 title_section pb-2.5">{{ __('profil.your_settings') }}</h3>
        <div class="sm:flex gap-5 2xl:gap-x-8 sm:items-start">
            <x-admin.modal.button wire:click="toggleModal('edit', {!! $user->id !!})" class="w-1/1 text-left p-3 profil mb-5" label="{{ __('profil.edit_profile') }}" title="{{ __('profil.edit_profile_title') }}" />
            <x-admin.modal.button class="w-1/1 text-left p-3 profil" label="{{ __('profil.manage_notifications') }}" title="{{ __('profil.manage_notifications_title') }}" />
        </div>
    </section>

    <section class="pt-30">
        <h3 class="text-xl 2xl:text-2xl underline decoration-1 decoration-orange-400 title_section pb-2.5">{{ __('profil.refuge_management') }}</h3>
        <div class="sm:flex gap-x-5 2xl:gap-x-8 sm:items-start flex-wrap">
            <x-admin.button class="w-1/1 sm:w-[48%] lg:w-1/1 xl:w-[48%] p-3 pl-11 add mb-5" label="{{ __('profil.add_animal') }}" title="{{ __('profil.add_animal_title') }}" href="{{ route('admin.animals.create') }}"/>
            <x-admin.button class="w-1/1 sm:w-[48%] lg:w-1/1 xl:w-[48%] p-3 pl-11 add mb-5" label="{{ __('profil.add_volunteer') }}" title="{{ __('profil.add_volunteer_title') }}" href="{{ route('admin.volunteers.create') }}"/>
            <x-admin.button class="w-1/1 sm:w-[48%] lg:w-1/1 xl:w-[48%] p-3 pl-11 task mb-5" label="{{ __('profil.view_tasks') }}" title="{{ __('profil.view_tasks_title') }}" href="{{ route('admin.tasks.index') }}"/>
            <x-admin.button class="w-1/1 sm:w-[48%] lg:w-1/1 xl:w-[48%] p-3 pl-11 message mb-5" label="{{ __('profil.view_messages') }}" title="{{ __('profil.view_messages_title') }}" href="{{ route('admin.contact_messages.index') }}"/>
            <x-admin.button class="w-1/1 sm:w-[48%] lg:w-1/1 xl:w-[48%] p-3 pl-11 adoptions mb-5" label="{{ __('profil.manage_adoptions') }}" title="{{ __('profil.manage_adoptions_title') }}" href="{{ route('admin.adoptions.index') }}"/>
            <x-admin.button class="w-1/1 sm:w-[48%] lg:w-1/1 xl:w-[48%] p-3 pl-11 adoptions mb-5" label="{{ __('profil.manage_animals') }}" title="{{ __('profil.manage_animals_title') }}" href="{{ route('admin.animals.index') }}"/>
            <x-admin.button class="w-1/1 sm:w-[48%] lg:w-1/1 xl:w-[48%] p-3 pl-11 volunteers mb-5" label="{{ __('profil.manage_volunteers') }}" title="{{ __('profil.manage_volunteers_title') }}" href="{{ route('admin.volunteers.index') }}"/>
        </div>
    </section>

    <x-admin.sections.stats_cards :welcome="$welcome" :adopted="$adopted" :in="$in" :care="$care" :pending="$pending" :draft="$draft"/>

    @if($isOpenEditModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'edit' })" class="lg:text-2xl pb-10 text-orange-600 underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold">
            <x-slot:title>{{ __('profil.edit_profile') }}</x-slot:title>
            <x-slot:content>
                <div class="flex justify-center flex-col">
                    <form method="post" wire:submit.prevent="save" class="flex flex-col gap-5">
                        @csrf
                        <x-admin.form.fields.input field_name="user_name" wire:model="form.name"
                                                   :required="true"
                                                   label="{{ __('profil.enter_name') }}"/>
                        <x-admin.form.fields.input field_name="user_email" wire:model="form.email"
                                                   :required="true"
                                                   type="email"
                                                   label="{{ __('profil.enter_email') }}"/>
                        <div class="flex gap-3 items-end" x-data="{ show: false }">
                            <x-admin.form.fields.input field_name="user_password" wire:model="form.password"
                                                       :required="true"
                                                       x-bind:type="show ? 'text' : 'password'"
                                                       label="{{ __('profil.enter_password') }}"/>
                            <x-admin.modal.button_action @click="show = !show" title="{{ __('profil.toggle_password') }}" src="{{ asset('assets/img/icones/eye.svg') }}" class="voir" alt="{{ __('profil.toggle_password') }}"/>
                        </div>

                        <x-admin.form.fields.input field_name="user_picture" wire:model="form.profil_picture"
                                                   :required="true"
                                                   type="file"
                                                   label="{{ __('profil.choose_profile_picture') }}"/>
                        <x-admin.form.buttons.button
                            class="text-orange-50 lg:text-xl bg-orange-600 border-2 rounded-lg px-10 py-2 w-1/1 hover:scale-110 duration-300 transition-all"
                            text="{{ __('profil.edit_profile') }}"/>
                    </form>
                    <button
                        class="pt-4 hover:text-orange-600 hover:text-xl hover:duration-200 text-center underline decoration-orange-400 decoration-2"
                        wire:click="toggleModal('edit')">{{ __('profil.cancel') }}
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif
</main>
