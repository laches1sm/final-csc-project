<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EventsTest extends TestCase
{
    /**
     * This class is testing whether a user can see events or 
     * interact with them
     * Also tests whether a user can add events 
     */

     // This test will see if a user can access the 
     public function testUserCanSeeEvents()
     {
         $event = factory('App\Events')->create();

         $response = $this->get('/eventlist');

         $response->assertSee($event->title);
     }


}