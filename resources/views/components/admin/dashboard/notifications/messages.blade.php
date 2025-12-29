@props(['messages', 'title'])

<div class="border rounded-xl border-orange-600 [box-shadow:var(--shadow-xl)] p-5 todo mb-8 md:w-[48%] lg:w-1/1 xl:w-[48%]">
    <div class="flex items-start gap-2">
        <h3 class="title_section text-2xl font-medium underline decoration-orange-400 decoration-2 pb-4">{!! $title !!}</h3>
        <img src="{!! asset('assets/img/small_paw.svg') !!}" alt="Petite patte de chat orange">
    </div>
    @foreach($messages as $message)
        <x-admin.dashboard.article_message_card day="{!! \Carbon\Carbon::parse($message->created_at)->day !!}" contact="{!! $message->first_name !!} {!! $message->last_name !!}" message="{{ Str::limit($message->message, 50) }}"/>
    @endforeach
    <div class="flex flex-col items-center">
        <x-admin.button href="{!! route('admin.contact_messages.index') !!}" title="Aller voir tous les messages" label="Voir les messages de contact" class="w-1/1 text-center"/>
    </div>
</div>
