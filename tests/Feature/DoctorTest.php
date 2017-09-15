<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DoctorTest extends TestCase
{
    public function testIfDisplayDoctors()
    {
        $response = $this->call('GET', route('doctors.show'));

        $response->assertStatus(200)
            ->assertViewIs('doctor');
    }
}
