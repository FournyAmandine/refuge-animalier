@php
    $details = [
        ['href' => 'tel:0436107609', 'title'=>__('public_footer.coordinates'), 'label'=>'0436.10.76.09', 'li_class'=>'details_tel'],
        ['href' => 'https://www.google.com/maps/place/Rue+de+la+Haie+de+Claire+5,+5353+Ohey/', 'title'=>__('public_footer.coordinates'), 'label'=>'Rue des Marguerites 6875, Beryam', 'li_class'=>'details_maps'],
        ['href' => 'mailto:lespattes.heureuses@contact.be', 'title'=>__('public_footer.coordinates'), 'label'=>'lespattes.heureuses@contact.be', 'li_class'=>'details_mail']
    ];
@endphp

<footer class="bg-white flex flex-col border-t-2 border-orange-600">
    <h2 class="sro">{{ __('public_footer.title') }}</h2>
    <div class="flex flex-col md:flex-row md:flex-wrap lg:justify-between">
        <figure class="md:w-1/2 md:pt-25 xl:w-1/5">
            <img class="m-auto" src="{!! asset('assets/img/logo-medium.svg') !!}" alt="{{ __('public_footer.title') }}" width="305" height="115">
        </figure>

        <div class="mt-[4.375rem] flex flex-col items-center gap-[0.625rem] md:w-1/2 xl:w-1/5 lg:pl-20">
            <h3 class="text-orange-600 font-semibold text-xl text-center mb-[0.9375rem]">{{ __('public_footer.coordinates') }}</h3>
            <ul>
                @foreach($details as $detail)
                    <x-public.navigation.link
                        :li_class="$detail['li_class']"
                        :href="$detail['href']"
                        :label="$detail['label']"
                        :title="$detail['title']"
                    />
                @endforeach
            </ul>
        </div>

        <div class="my-[4.375rem] flex flex-col items-center sm:w-1/2 m-auto xl:w-2/6">
            <h3 class="text-orange-600 font-semibold text-xl mb-[0.9375rem]">{{ __('public_footer.opening_hours') }}</h3>
            <ul class="flex flex-wrap max-w-9/12 gap-x-[2.5rem] gap-y-[0.9375rem] lg:pl-12">
                <li class="w-44">{{ __('public_footer.days.monday') }} : {{ __('public_footer.hours.monday') }}</li>
                <li>{{ __('public_footer.days.tuesday') }} : {{ __('public_footer.hours.tuesday') }}</li>
                <li class="w-44">{{ __('public_footer.days.wednesday') }} : {{ __('public_footer.hours.wednesday') }}</li>
                <li>{{ __('public_footer.days.thursday') }} : {{ __('public_footer.hours.thursday') }}</li>
                <li class="w-44">{{ __('public_footer.days.friday') }} : {{ __('public_footer.hours.friday') }}</li>
                <li class="w-40">{{ __('public_footer.days.saturday') }} : {{ __('public_footer.hours.saturday') }}</li>
                <li>{{ __('public_footer.days.sunday') }} : {{ __('public_footer.hours.sunday') }}</li>
            </ul>
        </div>

        <div class="mb-[1.875rem] w-1/1 px-10 flex flex-col items-center md:my-[4.375rem] sm:w-1/2 m-auto md:px-0 md:w-2/5 xl:w-1/4 lg:px-[3.4375rem]">
            <h3 class="text-orange-600 font-semibold text-xl text-center">{{ __('public_footer.navigation') }}</h3>
            <x-public.navigation.links nav_class="footer_nav" li_class="footer_link"/>
        </div>

        <div class="flex justify-end pt-[0.625rem] pr-[0.625rem] pb-[1rem] border-t-2 border-orange-600 md:w-1/1">
            <a class="text-sm" href="#">{{ __('public_footer.privacy') }}</a>
        </div>
    </div>
</footer>
