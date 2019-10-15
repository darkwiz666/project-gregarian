<?php

namespace Tests\Feature;

use Tests\BaseTest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends BaseTest
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegisterPageWorks()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
