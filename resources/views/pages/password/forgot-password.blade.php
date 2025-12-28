<x-login.app title="Connectez-vous">
    <main class="w-full h-[100vh] flex justify-center items-center">
        <section class="max-w-[70%] md:max-w-120 shadow-[var(--shadow-xl)] rounded-2xl login py-15 px-7 md:py-20 md:px-14 flex flex-col">
            <h2 class="text-orange-600 text-3xl text-center">Réinitialiser votre mot de passe</h2>
            <p class="font-semibold text-xl py-6">Entrez votre email pour recevoir un lien pour le réinitialiser</p>
            <form method="post" action="{!! route('password.email') !!}" class="flex flex-col gap-8">
                @csrf
                <x-login.input field_name="email" type="email" placeholder="john@doe.be" label="Entrez votre email"
                               :required="true"/>
                <x-login.button text="Envoyer le lien"
                                class="w-1/1 text-orange-50 lg:text-xl bg-orange-600 border-2 rounded-lg px-5 py-2 hover:scale-110 duration-300 transition-all"/>
            </form>
        </section>
    </main>
</x-login.app>
