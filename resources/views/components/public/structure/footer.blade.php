@php
    $details = [
        ['href' => 'tel:0436107609', 'title'=>'Envoyer un mail au refuge', 'label'=>'0436.10.76.09', 'li_class'=>'details_tel'],
        ['href' => 'https://www.google.com/maps/place/Rue+de+la+Haie+de+Claire+5,+5353+Ohey/@50.4399418,5.225124,3a,75y,247.96h,88.13t/data=!3m7!1e1!3m5!1smERcT2xiTCUhqthMOQDRIQ!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D1.8691200692917533%26panoid%3DmERcT2xiTCUhqthMOQDRIQ%26yaw%3D247.9559120663522!7i16384!8i8192!4m6!3m5!1s0x47c1ae89bc0fd665:0xc8e1703fe707c5a!8m2!3d50.4395843!4d5.2240848!16s%2Fg%2F11lsg3rcdp?entry=ttu&g_ep=EgoyMDI1MTExNy4wIKXMDSoASAFQAw%3D%3D', 'title'=>'Aller voir la carte', 'label'=>'Rue des Marguerites
            6875, Beryam', 'li_class'=>'details_maps'],
        ['href' => 'mailto:lespattes.heureuses@contact.be', 'title'=>'Téléphoner aux Pattes Heureuses', 'label'=>'lespattes.heureuses@contact.be', 'li_class'=>'details_mail']
    ];
@endphp

<footer class="bg-white flex flex-col  border-t-2 border-orange-600">
    <h2 class="sro">Footer des Pattes Heureuses</h2>
    <div class="flex flex-col md:flex-row md:flex-wrap lg:justify-between">
    <figure class="md:w-1/2 md:pt-25 xl:w-1/5">
        <img class="m-auto" src="{!! asset('assets/img/logo-medium.svg') !!}" alt="Logo Les Pattes Heureuses avec une patte de chat dans une maison" width="305" height="115">
    </figure>
    <div class="mt-[4.375rem] flex flex-col items-center gap-[0.625rem] md:w-1/2 xl:w-1/5 lg:pl-20">
        <h3 class="text-orange-600 font-semibold text-xl text-center mb-[0.9375rem]">Coordonnées</h3>
        <ul>
            @foreach($details as $detail)
                <x-public.navigation.link :li_class="$detail['li_class']" :href="$detail['href']" :label="$detail['label']" :title="$detail['title']"/>
            @endforeach
        </ul>
    </div>

    <div class="my-[4.375rem] flex flex-col items-center sm:w-1/2 m-auto xl:w-2/6">
        <h3 class="text-orange-600 font-semibold text-xl mb-[0.9375rem]">Heures d'ouverture</h3>
        <ul class="flex flex-wrap max-w-9/12 gap-x-[2.5rem] gap-y-[0.9375rem] lg:pl-12">
            <li class="w-33">Lundi&nbsp;:&nbsp;10h-15h</li>
            <li>Mardi&nbsp;:&nbsp;9h-17h</li>
            <li class="w-34">Mercredi &nbsp;:&nbsp;9h-17h</li>
            <li>Jeudi&nbsp;:&nbsp;9h-17h</li>
            <li class="w-33">Vendredi&nbsp;:&nbsp;9h-20h</li>
            <li>Samedi&nbsp;:&nbsp;9h-18h</li>
            <li class="w-40">Dimanche&nbsp;:&nbsp;11h-17h</li>
        </ul>
    </div>

    <div class="mb-[1.875rem] w-1/1 flex flex-col items-center md:my-[4.375rem] sm:w-1/2 m-auto md:px-0 md:w-2/5 xl:w-1/4 lg:px-[3.4375rem]">
        <h3 class="text-orange-600 font-semibold text-xl text-center">Navigation</h3>
       <x-public.navigation.links nav_class="footer_nav" li_class="footer_link"/>
    </div>


    <div class="flex justify-end pt-[0.625rem] pr-[0.625rem] pb-[1rem] border-t-2 border-orange-600 md:w-1/1">
        <a class="text-sm" href="#">© Les Pattes Heureuses - Confidentialité </a>
    </div>
</footer>
