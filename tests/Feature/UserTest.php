<?php

namespace Tests\Feature;


use App\Models\User;
use Tests\TestCase;
class UserTest extends TestCase
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
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_register_form()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name'=> 'Jhon Doe',
            'email' => 'jhondoe@gmail.com'
        ]);

        $user2 = User::make([
            'name'=> 'Daisy Gill',
            'email' => 'daisygill@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    public function test_store()
    {
        $response = $this->post('/web/events', [
            'event_name' => 'Php',
            'event_date' => '10/10/2023',
            'event_description' => 'Hello PHP!!',
            'event_img' => 'https://unsplash.com/images/stock/high-resolution',
            'event_capacity' => '12',
        ]);

        $response->assertStatus(200);
    }

}