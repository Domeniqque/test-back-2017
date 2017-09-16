<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DoctorTest extends TestCase
{
    public function testIfDisplayAllDoctorsInApi()
    {
        $response = $this->get('/api/doctors');

        $response->assertJsonStructure([
            "total",
            "data" => [
                "*" => [
                    "id",
                    "name",
                    "speciality",
                    "phone",
                    "description",
                    "last_update"
                ]
            ]
        ]);
    }
}
