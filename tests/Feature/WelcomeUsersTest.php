<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
//    /** @test  */
//    public function it_welcome_user_with_nickname()
//    {
//            $this->get('saludo/felipe/pipe')
//                 ->assertStatus(200)
//                    ->assertSee('Bienvenido felipe, tu apodo es pipe');
//    }
    /** @test  */
    function it_welcome_user_without_nickname(){
        $this->get('/saludo/felipe')
            ->assertStatus(200)
            ->assertSee('Bienvenido felipe, no tienes apodo');
    }
}
