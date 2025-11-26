<x-public.app>
    <x-slot:title_page>
        {!! $animal->name !!}
    </x-slot:title_page>
    <main class="animal_single">
        <x-public.sections.intro ariane="Compagnons/{!! $animal->name !!}" title="{!! $animal->name !!}"/>
        <section>
            <h3 class="sro">Decription de {!! $animal->name !!}</h3>
            <img class="rounded-lg w-1/1 h-auto" src="{!! $animal->img_path !!}" alt="Image de notre compagnon {!! $animal->name !!}" width="350" height="219">
            <div class="flex justify-between pt-5 gap-5">
                <img class="rounded-lg w-1/2" src="{!! $animal->img_path !!}" alt="Image de notre compagnon {!! $animal->name !!}" width="166">
                <img class="rounded-lg w-1/2" src="{!! $animal->img_path !!}" alt="Image de notre compagnon {!! $animal->name !!}" width="166">
            </div>
            <div class="pt-5 flex flex-col gap-3 font-semibold leading-8">
                <p class="text-2xl">{!! $animal->race !!}</p>
                <p class="text-xl">{!! $animal->sexe !!}</p>
                <p class="text-xl">Né le  {{ \Carbon\Carbon::parse($animal->birth_date)->translatedFormat('d F Y') }}, {!! $animal->age !!} ans</p>
                <p>Charly est un magnifique Border Collie de 2 ans, plein de vie et toujours prêt à partir à l’aventure. Véritable boule d’énergie, il adore courir, jouer à la balle et découvrir de nouveaux endroits pendant de longues balades.</p>
                <p>Mais derrière son côté dynamique, Charly cache aussi un grand cœur. Très affectueux, il aime les câlins et la compagnie des humains. Il s’attache rapidement et cherche avant tout une famille présente, capable de lui offrir du temps, de l’attention et beaucoup d’amour.</p>
                <p>Curieux, intelligent et toujours en quête de stimulation, Charly serait le compagnon idéal pour une personne active ou une famille qui aime les promenades, les randonnées ou le jeu en plein air.</p>
                <p>Il s’entend bien avec les autres chiens, surtout s’ils partagent son goût pour le mouvement et les jeux.</p>
                <p>Charly attend aujourd’hui un foyer aimant qui saura canaliser son énergie et lui donner la stabilité qu’il mérite. En retour, il vous offrira une loyauté sans faille et une affection infinie</p>
            </div>
        </section>
        <section>
            <h3 class="pt-20 text-xl text-orange-600 pb-3">Faites connaissance avec notre compagnon</h3>
            <form action="#" method="get">
                <x-public.form.adoption-form>
                    <x-slot:options>
                        <x-public.form.fields.option
                            selected="selected"
                            value="{!! $animal->name !!}"
                            option_name="{!! $animal->name !!}"
                        />
                    </x-slot:options>
                </x-public.form.adoption-form>
                <div class="flex justify-end">
                    <x-public.form.buttons.button text="Envoyer la demande" />
                </div>
            </form>
        </section>
        <section class="show_cards pt-28 text-xl relative pb-21">
            <img class="absolute z-1 right-6 top-18" src="{!! asset("assets/img/chien_3.png") !!}" alt="Illustration d'un petit chien beige qui rit" width="108" height="127">
            <x-public.sections.card-list :animals="$animals"
                                         class="grid grid-cols-[repeat(4,310px)] gap-5 overflow-x-scroll py-4 px-[1.25rem]"/>
            <img class="absolute z-1 left-6 bottom-[-0.5rem]" src="{!! asset("assets/img/lapin_2.png") !!}"
                 alt="Illustration d'un petit lapin roux" width="108" height="128">
        </section>
    </main>
</x-public.app>
