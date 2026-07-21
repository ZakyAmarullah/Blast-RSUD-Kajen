<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test registration form displays.
     */
    public function test_registration_form_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
        $response->assertSee('Buat Akun Baru');
    }

    /**
     * Test login form displays.
     */
    public function test_login_form_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('Selamat Datang Kembali');
    }

    /**
     * Test registration validation.
     */
    public function test_registration_fails_with_invalid_data(): void
    {
        $response = $this->post('/register', [
            'username' => '',
            'email' => 'not-an-email',
            'password' => '12345',
        ]);

        $response->assertSessionHasErrors(['username', 'email', 'password']);
        $this->assertDatabaseEmpty('users');
    }

    /**
     * Test registration validation for password length.
     */
    public function test_registration_fails_if_password_is_less_than_8_characters(): void
    {
        $response = $this->post('/register', [
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => 'short12', // 7 characters
        ]);

        $response->assertSessionHasErrors(['password']);
        $this->assertDatabaseEmpty('users');
    }

    /**
     * Test successful registration redirects to login.
     */
    public function test_registration_succeeds_with_valid_data_and_redirects_to_login(): void
    {
        $response = $this->post('/register', [
            'username' => 'zakyuser',
            'email' => 'zaky@example.com',
            'password' => 'securepassword123',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHas('success', 'Registrasi berhasil! Silakan login.');
        
        $this->assertDatabaseHas('users', [
            'name' => 'zakyuser',
            'email' => 'zaky@example.com',
        ]);
    }

    /**
     * Test login validation.
     */
    public function test_login_fails_with_invalid_credentials(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('correctpassword'),
        ]);

        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'wrongpassword',
        ]);

        $response->assertSessionHasErrors(['email']);
        $this->assertGuest();
    }

    /**
     * Test successful login.
     */
    public function test_login_succeeds_with_correct_credentials(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('correctpassword123'),
        ]);

        $response = $this->post('/login', [
            'email' => 'john@example.com',
            'password' => 'correctpassword123',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * Test successful logout.
     */
    public function test_logout_logs_out_user(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/logout');

        $response->assertRedirect('/');
        $this->assertGuest();
    }
}
