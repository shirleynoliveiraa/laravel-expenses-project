<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExpenseTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_expense_with_mock()
{
    // create user and login using Sanctum
    $user = User::factory()->create();
    $token = $user->createToken('TestToken')->plainTextToken;

    // send auth header token
    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->postJson('/api/expenses', [
        'description' => 'Mock Expense',
        'date' => now()->toDateString(),
        'value' => 100.00,
    ]);

    // assert the answer
    $response->assertStatus(201)
             ->assertJson([
                 'description' => 'Mock Expense',
                 'value' => 100.00,
             ]);
}

public function test_authenticated_user_can_access_protected_route()
{
    // create user and login using Sanctum
    $user = User::factory()->create();
    $token = $user->createToken('TestToken')->plainTextToken;

    // send auth header token
    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->getJson('/api/expenses');

    // assert the answer
    $response->assertStatus(200);
}

    public function test_database_setup()
    {
        $this->artisan('migrate');

        $this->assertTrue(\Schema::hasTable('expenses'));
    }
}
