<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_login(): void
    {
        $user = User::factory()->create([
            'email' => 'admin@test.ru',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post(route('login.store'), [
            'email' => 'admin@test.ru',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('dashboard'));

        $this->assertAuthenticated();
    }
}
