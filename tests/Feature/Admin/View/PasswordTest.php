<?php

it('can display the forgot password form', function (){
    $response = $this->get(route('password.email', ['locale' => app()->getLocale()]));

    $response->assertSee('Réinitialiser votre mot de passe');
    $response->assertSeeInOrder(['<form', 'Entrez votre email', '<button', 'Envoyer le lien'], true);
});

it('can display the reset password form', function (){
    $response = $this->get(route('password.update',['locale' => app()->getLocale()]));

    $response->assertSee('Réinitialiser votre mot de passe');
    $response->assertSeeInOrder(['<form', 'Entrez votre email', 'Entrez votre mot de passe', 'Confirmer votre mot de passe', '<button', 'Modifier le mot de passe'], true);
});
