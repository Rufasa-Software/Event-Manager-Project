<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudTest extends TestCase
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

    //Type error 302
    // public function test_store()
    // {
    //     $response = $this->post('/admin', [
    //         'event_name' => 'Php',
    //         'event_date' => '10/10/2023',
    //         'event_description' => 'Hello PHP!!',
    //         'event_img' => 'https://unsplash.com/images/stock/high-resolution',
    //         'event_capacity' => '12',
    //     ]);

    //     $response->assertStatus(200);
    // }
}

// The CRUD functions :

// admin(index)

// admin/create
// admin/store

// admin/id/edit
// admin/update

// admin/delete