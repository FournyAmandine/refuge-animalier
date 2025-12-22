@props([
    'content',
    'title',
    'outside'
    ])


<div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
    <div class="bg-orange-50 p-14 rounded-xl border-2 border-orange-600 max-w-200"
         @click.outside="{{$outside}}">

        <p {!! $attributes->merge(['class'=>'text-center text-xl']) !!}>
            {{$title}}
        </p>

        {{$content}}
    </div>
</div>
