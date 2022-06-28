<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class AdminDeclineCuisineTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_admin_decline_cuisine()
    {
        $user = User::factory()->create();
 
        $this->seed();
        
        $this->post('/login', [
            'username' => $user->username,
            'password' => 'password',
        ]);
 
        $this->assertAuthenticated();

        $this->post('/add_cuisine', [
            'nameEN' => 'nameEN',
            'nameTH' => 'nameTH',
            'user' => 'user',
            'nationality' => 'nationality',
            'description' => 'description',
            'image' => 'image.jpg'
        ]);

        $this->post('/logout');

        $this->post('/login', [
            'username' => 'petchyparaa',
            'password' => 'adminpass',
        ]);

        $this->assertAuthenticated();

        $response = $this->post('/decline/{1}');

        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
