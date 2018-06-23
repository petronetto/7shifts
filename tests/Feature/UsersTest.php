<?php

namespace Tests\Feature;

use Tests\TestCase;

class UsersTest extends TestCase
{
    /**
     * A basic test for Home.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }
}
