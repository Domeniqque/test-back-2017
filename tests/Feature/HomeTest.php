<?php

namespace Tests\Feature;

use App\Doctor;
use Tests\TestCase;

class HomeTest extends TestCase
{
    public function testIfDisplayAllDoctors()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('index')
            ->assertViewHas('doctors');
    }
}
