<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AllCuisinesPageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_all_cuisines_page()
    {
        $this->seed();
        
        $response = $this->get('/cuisines');

        $response->assertStatus(200);
    }

    public function test_cuisine_detail_page()
    {
        $response = $this->get('/cuisines/1');

        $response->assertStatus(200);
    }

    public function test_search_cuisine()
    {
        $response = $this->get('/searchCuisine');

        $response->assertStatus(200);
    }
}
