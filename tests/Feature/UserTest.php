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

}

// User testing :

// user(index)
// get user
// store user
// user duplicity 