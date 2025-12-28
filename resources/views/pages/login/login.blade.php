<x-login.app title="Connectez-vous">
    <main class="w-full h-[100vh] flex justify-center items-center">
        <section class="max-w-[80%] md:max-w-150 shadow-[var(--shadow-xl)] rounded-2xl login py-15 px-7 md:py-20 md:px-14 flex flex-col">
            <h2 class="text-orange-600 text-3xl text-center">Bienvenue chez</h2>
            <img class="w-60 md:w-110" src="{!! asset('assets/img/logo-medium.svg') !!}"
                 alt="Logo les Pattes Heureuses avec une pattes de chat dans une maison">
            <p class="font-semibold text-2xl py-2.5">Connectez-vous à votre refuge</p>
            <span class="text-red-500 text-sm required pb-8">Les champs * sont obligatoires</span>
            <form method="post" action="{!! route('login') !!}" class="flex flex-col gap-8">
                @csrf
                <x-login.input field_name="email" type="email" placeholder="john@doe.be" label="Entrez votre email"
                               :required="true"/>
                <x-login.input field_name="password" type="password" placeholder="*****"
                               label="Entrez votre mot de passe" :required="true"/>
                <div class="flex justify-between flex-wrap gap-2">
                    <x-login.input_checkbox field_name="remember" label="Se souvenir de moi" class_label="text-md"/>
                    <a href="{!! route('password.request') !!}" title="Aller vers la page de modification du mot de passe" class="text-orange-600">Mot de passe oublié?</a>
                </div>
                <x-login.button text="Se connecter"
                                class="w-1/1 text-orange-50 lg:text-xl bg-orange-600 border-2 rounded-lg px-5 py-2 hover:scale-110 duration-300 transition-all"/>
            </form>
            <p class="text-center pt-5">Pas encore de compte? <span
                    class="text-orange-600 required">Enregistrez-vous!</span></p>
        </section>
    </main>
</x-login.app>
