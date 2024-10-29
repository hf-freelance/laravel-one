<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_backoffice_forbidden(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('backoffice');

        $response->assertFound();
        $response->assertRedirect('dashboard');
    }

    public function test_backoffice(): void
    {
        $admin = User::factory()->create(['admin' => 1]);

        $response = $this
            ->actingAs($admin)
            ->get('backoffice');

        $response->assertOk();
    }
}