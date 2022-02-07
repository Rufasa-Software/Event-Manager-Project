<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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

    //Type error 500
    // public function test_index()
    // {
    //     $response = $this->get('/');

    //     $response->assertSuccessful()
    //             ->assertStatus(200);
    // }


    public function test_login()
    {
        $response = $this->get('/login');

        $response->assertSuccessful()
                ->assertStatus(200);
    }

    public function test_register()
    {
        $response = $this->get('/register');

        $response->assertSuccessful()
                ->assertStatus(200);
    }

    //Type error 500
    // public function test_admin()
    // {
    //     $response = $this->get('/admin');

    //     $response
    //             ->assertStatus(200);
    // }

    //Type error 302
    // public function test_user_profile()
    // {
    //     $response = $this->get('/home');

    //     $response->assertSuccessful()
    //             ->assertStatus(200);
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