<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\User;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_auth_register() {
        $this->actingAs(factory(User::class)->create());
        $reponse = $this->post('/oauth/token')->assertStatus(201);
    }

    public function test_auth_login() {
        $this->actingAs(factory(User::class)->create());
        $reponse = $this->post('/oauth/token')->assertOk();
    }
}
