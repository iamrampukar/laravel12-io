<?php

test('shows the home Page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
