<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testElectionNav()
    {
        $this->visit('/')
            ->click('Election')
            ->seePageIs('/elections/create');
    }

    public function testPartyForm()
    {
        $this->visit('/parties/create')
            ->type('10', 'partyid')
            ->type('SPP', 'partyname')
            ->type('EGG', 'partysymbol')
            ->press('ADD')
            ->seePageIs('/parties');
    }

    public function testDatabase()
    {
        // Make call to application...
        $this->seeInDatabase('elections', ['electionid' => '1']);
    }
}
