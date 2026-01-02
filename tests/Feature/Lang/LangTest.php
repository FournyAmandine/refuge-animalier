<?php

it('load about page in english', function () {

    $this->get('en/about')->assertStatus(200);

    expect(app()->getLocale())->toBe('en');

});


it('load about page in french', function () {

    $this->get('fr/about')->assertStatus(200);

    expect(app()->getLocale())->toBe('fr');

});
