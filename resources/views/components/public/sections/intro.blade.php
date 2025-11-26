@props(['title', 'ariane'])


<div>
    <span class="ariane pl-5 block text-sm text-orange-600 font-semibold italic pb-5">{!! $ariane !!}</span>
    <a class="go_back_ordi" href="javascript:history.go(-1)" title="Retourner sur la page précédente"><span class="return">Retour</span></a>
    <h2 class="p-5 md:pb-15 md:pt-0 [font-size:var(--text-3xl)] text-orange-600 underline decoration-orange-400 decoration-3 text-center">
        {!! $title !!}
    </h2>
</div>
