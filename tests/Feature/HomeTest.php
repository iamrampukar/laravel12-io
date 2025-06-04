<?php

it('It check in home page', function () {
    $resp = $this->get('/home');
    $resp->assertSee(' Namaste');
    // ->assertSee('Hello Nepal');
});
