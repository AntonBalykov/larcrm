<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginValidationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_email_is_required(): void
    {
        $response = $this->post(route('login.store'), [
            'password' => 'password',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_password_is_required(): void
    {
        $response = $this->post(route('login.store'), [
            'email' => 'admin@test.ru',
        ]);

        $response->assertSessionHasErrors('password');
    }
}
