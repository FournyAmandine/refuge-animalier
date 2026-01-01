<main class="lg:flex-1 bg-orange-50/30">
    <x-admin.sections.intro ariane="{{ __('volunteer_message.ariane') }}" title="{{ __('volunteer_message.title') }}"/>

    <section>
        <h3 class="title_section pb-5 lg:text-2xl">{{ __('volunteer_message.unread') }}</h3>
        @forelse($messages_unread as $message)
            <x-admin.messages.article_card
                href="#"
                id="{{ $message->id }}"
                message="{{ $message->message }}"
                name="{{ $message->first_name }} {{ $message->last_name }}"
                day="{{ \Carbon\Carbon::parse($message->created_at)->day }}"
                email="{{ $message->email }}"
                class="border-red-600"
                label="{{ __('volunteer_message.reply') }}"/>
        @empty
            <p class="text-center text-xl">{{ __('volunteer_message.all_read') }}</p>
        @endforelse
    </section>

    <section class="pt-20">
        <h3 class="title_section pb-5 lg:text-2xl">{{ __('volunteer_message.read') }}</h3>
        @forelse($messages_read as $message)
            <x-admin.messages.article_card
                id="{{ $message->id }}"
                href="#"
                message="{{ $message->message }}"
                name="{{ $message->first_name }} {{ $message->last_name }}"
                day="{{ \Carbon\Carbon::parse($message->created_at)->day }}"
                email="{{ $message->email }}"
                class="border-green-600"
                label="{{ __('volunteer_message.reply') }}"/>
        @empty
            <p class="text-center text-xl">{{ __('volunteer_message.none_read') }}</p>
        @endforelse
    </section>

    @if($isOpenShowModal)
        <x-admin.modal.general outside="$dispatch('toggleModal', { modal: 'show' })"
                               class="lg:text-2xl text-left text-orange-600 underline decoration-orange-400 decoration-3 [font-family:Baloo] font-semibold">
            <x-slot:title>
                {{ __('volunteer_message.message_from', ['name' => $openMessage->first_name.' '.$openMessage->last_name]) }}
            </x-slot:title>
            <x-slot:content>
                <div class="flex flex-col gap-2.5 pt-2.5">
                    <p>{{ $openMessage->email }}</p>
                    <p>{{ \Carbon\Carbon::parse($openMessage->created_at )->locale(app()->getLocale())->translatedFormat('d F Y à G:i') }}</p>
                </div>
                <p class="pt-10 text-xl">
                    {{ $openMessage->message }}
                </p>
                <div class="flex pt-16 gap-4 justify-end">
                    <x-admin.button
                        wire:click="toggleReadMessage({{ $openMessage->id }})"
                        href="mailto:{{ $openMessage->email }}"
                        title="{{ __('volunteer_message.send_email_to', ['name' => $openMessage->first_name]) }}"
                        label="{{ __('volunteer_message.reply_email') }}"
                        class="pr-3 pl-10 answer"/>
                    <button wire:click="markRead()" type="button"
                            class="pr-3 pl-10 bg-orange-600 text-orange-50 hover:scale-110 hover:transition-all hover:duration-200 rounded-xl lg:text-lg 2xl:text-xl read">
                        {{ __('volunteer_message.mark_read') }}
                    </button>
                </div>
            </x-slot:content>
        </x-admin.modal.general>
    @endif
</main>
