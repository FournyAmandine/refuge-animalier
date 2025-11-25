@props(['cards'])

@foreach($cards as $card)
    <x-public.cards.card :src="$card['src']"
                         :alt="$card['alt']"
                         :name="$card['name']" :dd="$card['dd']" href="#" :title="$card['name']"/>
@endforeach
