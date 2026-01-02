<?php


use App\Models\Animal;
use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\actingAs;

uses(RefreshDatabase::class);

it('can display the login form', function (){
$response = $this->get(route('login', ['locale' => app()->getLocale()]));

$response->assertSee('Connectez-vous à votre refuge');
$response->assertSeeInOrder(['<form', 'Entrez votre email', 'Entrez votre mot de passe', '<button', 'Se connecter'], true);
});

it('we are redirected to the dashboard after a successful request', function () {

    $password = 'amandine';
    $user = User::factory()->create([
        'name'=>'Amandine Fourny',
        'email' => 'amandine.fourny@gmail.com',
        'password' => \Illuminate\Support\Facades\Hash::make($password)
    ]);

    $response = $this->post(route('login.store', ['locale' => app()->getLocale()]),
        [
            'email'=>$user->email,
            'password'=>$password,
        ]);

    $response->assertStatus(302);
    $response->assertRedirect(route('dashboard'));

});

it('a guest can’t access to the dashboard and if he redirect to the login page', function () {

    $response = $this->get(route('dashboard', ['locale' => app()->getLocale()]));

    $response->assertStatus(302);
    $response->assertRedirect(route('login'));
});

it('a administrator can access to the dashboard', function () {

    $admin = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($admin);

    $response = $this->get(route('dashboard', ['locale' => app()->getLocale()]));

    $response->assertStatus(200);
});

it('a volunteer can’t access to the dashboard', function () {

    $volunteer = User::factory()->create(['role' => \App\Enums\UserRole::Volunteer]);
    actingAs($volunteer);

    $response = $this->get(route('dashboard', ['locale' => app()->getLocale()]));

    $response->assertStatus(403);
});
