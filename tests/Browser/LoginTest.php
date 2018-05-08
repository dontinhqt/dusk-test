<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/')
    //                 ->assertSee('Laravel');
    //     });
    // }

    public function test_I_can_login_successfully()
    {
        $this->browse(function ($browser) {
            $browser->visit('/login')
                    ->type('email', 'tinh.nguyen@gmail.com')
                    ->type('password', '123456')
                    ->press('Login')
                    ->assertSee('You are logged in!');
        });
    }

}
