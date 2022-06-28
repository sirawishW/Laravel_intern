<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class AddCuisineTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_cuisine()
    {
        $user = User::factory()->create();
 
        $this->post('/login', [
            'username' => $user->username,
            'password' => 'password',
        ]);
 
        $this->assertAuthenticated();

        $response = $this->post('/add_cuisine', [
            'nameEN' => 'nameEN',
            'nameTH' => 'nameTH',
            'user' => 'user',
            'nationality' => 'nationality',
            'description' => 'description',
            'image' => 'image.jpg'
        ]);

        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
