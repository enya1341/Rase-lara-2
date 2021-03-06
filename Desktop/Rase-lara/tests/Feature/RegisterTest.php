<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post('/api/v1/users/registration',[
            'name' => 'test',
            'email' => 'ayumi8286337@gmail.com',     // firebaseで認証を行っているためランダムにできませんでした
           
            'password' => 'test'
        ]);


        $response->assertStatus(500);
    }
}
