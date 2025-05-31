<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
           $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post('/games', ['name' => 'Sally', 'description' => 'awesome', 'image' => 'image',
         'price' => 250.50, 'stock' => 200, 'created_at' => now(), 'updated_at' => now()]);
 
        $response->assertStatus(201);
    }
}
