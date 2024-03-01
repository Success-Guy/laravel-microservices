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
            "email" => "testuser@gmail.com",
            "lastName" => "Test",
            "firstName" => "User"
        ]);
        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => "success",
            ]);
    }
}
