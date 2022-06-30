<?php

namespace Tests\Feature;

use App\Http\Controllers\NationalityController;
use App\Models\Nationality;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class HomepageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_guest_homepage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_admin_homepage()
    {
        $this->seed();
 
        $this->post('/login', [
            'username' => 'admin',
            'password' => 'adminpass',
        ]);
 
        $this->assertAuthenticated();

        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function test_user_homepage()
    {   
        $user = User::factory()->create();
 
        $this->post('/login', [
            'username' => $user->username,
            'password' => 'password',
        ]);
 
        $this->assertAuthenticated();

        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function test_guess_not_login()
    {
        $response = $this->get('/home');

        $response->assertRedirect('/login');
    }
}
