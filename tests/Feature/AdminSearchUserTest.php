<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminSearchUserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_search()
    {
        $this->seed();

        $this->post('/login', [
            'username' => 'admin',
            'password' => 'adminpass',
        ]);

        $this->assertAuthenticated();
        
        $response = $this->get('/searchPending');

        $response->assertStatus(200);
    }
}
