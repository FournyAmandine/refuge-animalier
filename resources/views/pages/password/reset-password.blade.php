<x-login.app title="Connectez-vous">
    <main class="w-full h-[100vh] flex justify-center items-center">
        <section class="max-w-[70%] md:max-w-120 shadow-[var(--shadow-xl)] rounded-2xl login py-15 px-7 md:py-20 md:px-14 flex flex-col">
            <h2 class="text-orange-600 text-3xl text-center">Réinitialiser votre mot de passe</h2>
            <p class="font-semibold text-xl py-6">Entrez votre email pour recevoir un lien pour le réinitialiser</p>
            <form method="post" action="{!! route('password.update') !!}" class="flex flex-col gap-8">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <x-login.input field_name="email" type="email" placeholder="john@doe.be" label="Entrez votre email"
                               :required="true"/>
                <x-login.input field_name="password" type="password" placeholder="*****"
                               label="Entrez votre mot de passe" :required="true"/>
                <x-login.input field_name="password_confirmation" type="password" placeholder="*****"
                               label="Confirmer votre mot de passe" :required="true"/>
                <x-login.button text="Modifier le mot de passe"
                                class="w-1/1 text-orange-50 lg:text-xl bg-orange-600 border-2 rounded-lg px-5 py-2 hover:scale-110 duration-300 transition-all"/>
            </form>
        </section>
    </main>
</x-login.app>
