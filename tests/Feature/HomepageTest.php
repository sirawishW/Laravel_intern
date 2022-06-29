<?php

namespace Tests\Feature;

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
            'username' => 'petchyparaa',
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
}
