<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
 
    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login');
 
        $response->assertStatus(200);
    }
 
    public function test_users_can_authenticate_using_the_login_screen()
    {
        $user = User::factory()->create();
 
        $response = $this->post('/login', [
            'username' => $user->username,
            'password' => 'password',
        ]);
 
        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
 
    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();
 
        $this->post('/login', [
            'username' => $user->username,
            'password' => 'wrong-password',
        ]);
 
        $this->assertGuest();
    }
}
