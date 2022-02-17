<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_index()
    {
        $response = $this->get('/');

        $response->assertSuccessful()
                ->assertStatus(200)
                ->assertViewIs('index');
    }

    public function test_login()
    {
        $response = $this->get('/login');

        $response->assertSuccessful()
                ->assertStatus(200)
                ->assertViewIs('auth.login');
    }

    public function test_register()
    {
        $response = $this->get('/register');

        $response->assertSuccessful()
                ->assertStatus(200)
                ->assertViewIs('auth.register');
    }

    public function test_user_profile()
    {
        $user = new User(array('name' => 'John Doe'));
        $this->be($user);
        
        $response = $this->get('/home');

        $response->assertSuccessful()
                ->assertStatus(200)
                ->assertViewIs('home');
    }

    public function test_create()
    {
        $user = new User(array('name' => 'John Doe'));
        $this->be($user);
        
        $response = $this->get('/user/create');

        $response->assertSuccessful()
                ->assertStatus(200)
                ->assertViewIs('crud.create');
    }

    public function test_edit()
    {
        $user = new User(array('name' => 'John Doe'));
        $this->be($user);
        
        $response = $this->get('/user/edit');

        $response->assertSuccessful()
                ->assertStatus(200);
                // ->assertViewIs('crud.edit');
                // See how to assert good edit by route
    }
}
