<?php

namespace Tests\Feature;

use App\Doctor;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIfDisplayAllDoctors()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('index')
            ->assertViewHas('doctors');
    }
}
