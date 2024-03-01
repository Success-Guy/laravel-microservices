<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase {
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_user() {
        $response = $this->postJson('/api/user', [
            "email" => "utuazzaaau@gmail.com",
            "lastName" => "Ajadi",
            "firstName" => "Abbey_Sam"
        ]);
        $response
            ->assertStatus(201)
            ->assertJson([
                'status' => "success",
            ]);
    }
}
