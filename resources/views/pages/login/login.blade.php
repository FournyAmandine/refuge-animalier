<x-login.app title="{{ __('login.login_title') }}">
    <main class="w-full h-[100vh] flex justify-center items-center">
        <section class="max-w-[80%] md:max-w-150 shadow-[var(--shadow-xl)] rounded-2xl login py-15 px-7 md:py-20 md:px-14 flex flex-col">
            <h2 class="text-orange-600 text-3xl text-center">{{ __('login.welcome') }}</h2>
            <img class="w-60 md:w-110" src="{{ asset('assets/img/logo-medium.svg') }}"
                 alt="{{ __('login.logo_alt') }}">
            <p class="font-semibold text-2xl py-2.5">{{ __('login.connect_to_shelter') }}</p>
            <span class="text-red-500 text-sm required pb-8">{{ __('login.required_fields') }}</span>
            <form method="post" action="{{ route('login') }}" class="flex flex-col gap-8">
                @csrf
                <x-login.input
                    field_name="email"
                    type="email"
                    placeholder="{{ __('login.email_placeholder') }}"
                    label="{{ __('login.email_label') }}"
                    :required="true"
                />
                <x-login.input
                    field_name="password"
                    type="password"
                    placeholder="{{ __('login.password_placeholder') }}"
                    label="{{ __('login.password_label') }}"
                    :required="true"
                />
                <div class="flex justify-between flex-wrap gap-2">
                    <x-login.input_checkbox
                        field_name="remember"
                        label="{{ __('login.remember_me') }}"
                        class_label="text-md"
                    />
                    <a href="{{ route('password.request') }}" title="{{ __('login.forgot_password_title') }}" class="text-orange-600">{{ __('login.forgot_password') }}</a>
                </div>
                <x-login.button
                    text="{{ __('login.login_button') }}"
                    class="w-1/1 text-orange-50 lg:text-xl bg-orange-600 border-2 rounded-lg px-5 py-2 hover:scale-110 duration-300 transition-all"
                />
            </form>
            <p class="text-center pt-5">{{ __('login.no_account') }} <span class="text-orange-600 required">{{ __('login.register') }}</span></p>
        </section>
    </main>
</x-login.app>
