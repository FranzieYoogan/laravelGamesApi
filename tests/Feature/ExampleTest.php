<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Game;

class ExampleTest extends TestCase
{
    public function test_it_deletes_a_game_successfully()
{
    $game = Game::create([
        'name' => 'Dark Souls',
        'description' => 'Hardcore action RPG',
        'image' => 'darksouls.jpg',
        'price' => 59.99,
        'stock' => 10,
    ]);

    $response = $this->deleteJson("/games/{$game->id}");

    $response->assertStatus(200)
             ->assertJson(['message' => 'Game deleted successfully']);

    $this->assertDatabaseMissing('games', ['id' => $game->id]);
}

}
