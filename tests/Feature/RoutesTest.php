<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use DatabaseMigrations;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_basic_test()
    {
        $this->assertTrue(true);
    }

    //Tests if the route index is working
    public function test_index()
    {
        $response = $this->get('/');

        $response->assertSuccessful()
                ->assertStatus(200)
                ->assertViewIs('index');
    }

    //Tests if the route login is working
    public function test_login()
    {
        $response = $this->get('/login');

        $response->assertSuccessful()
                ->assertStatus(200)
                ->assertViewIs('auth.login');
    }

    //Tests if the route register is working
    public function test_register()
    {
        $response = $this->get('/register');

        $response->assertSuccessful()
                ->assertStatus(200)
                ->assertViewIs('auth.register');
    }

    //Tests if the route admin is working
    // public function test_admin()
    // {
    //     $this->withoutExceptionHandling();
    //     $response = $this->get('/admin');

    //     $response->assertSuccessful()
    //             ->assertStatus(200)
    //             ->assertViewIs('admin.admin');
    // }

    //Tests if the route profile is working
    // public function test_user_profile()
    // {
    //     $response = $this->get('/home');

    //     $response->assertSuccessful()
    //             ->assertStatus(200)
    //             ->assertViewIs('layouts.user');
    // }
}

//All the views :
// index

// login
// register

// user profile

// admin
// admin/create
// admin/id/edit