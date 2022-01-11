<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function testDashboard()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visit('/dashboard')
                ->assertSee("You're logged in");
        });
    }

    public function testConfigDetails()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/test')
                ->assertSee("Cache Host: redis");
        });
    }
}
