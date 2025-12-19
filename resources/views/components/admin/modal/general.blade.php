@props([
    'content',
    'title',
    'outside'
    ])


<div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
    <div class="bg-orange-50 p-10 rounded-xl border-2 border-orange-600"
         @click.outside="{{$outside}}">

        <p class="text-center text-xl pb-5">
            {{$title}}
        </p>

        {{$content}}
    </div>
</div>
