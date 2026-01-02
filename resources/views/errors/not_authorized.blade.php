<x-errors.app title="Accès non-autorisé">
    <main class="w-full h-[100vh] flex items-center justify-center">
        <div class="text-center bg-white p-10 rounded shadow">
            <h2 class="text-3xl font-bold mb-4 text-orange-600 underline decoration-2 decoration-orange-400">Accès refusé</h2>
            <p class="mb-6">Vous ne pouvez pas accéder à cette page</p>
            <a href="{!! route('admin.animals.index') !!}" class="px-4 py-2 inline-block bg-orange-600 text-white rounded hover:scale-110 hover:transition-all hover:duration-200">Retour sur la page animaux</a>
        </div>
    </main>
</x-errors.app>
