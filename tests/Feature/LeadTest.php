<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LeadTest extends TestCase
{
    public function testShouldValidateLead()
    {
        $response = $this->call('POST', '/leads', [
            'name' => '',
            'phone' => '',
            'email' => ''
        ]);

        $response->assertStatus(302)
            ->assertSessionHasErrors([
                'name', 'phone', 'email'
            ]);
    }

    public function testIfCreateAndReturnAppointmentSuccessView()
    {
        $lead = \Mockery::mock('App\Lead')->shouldReceive('create');
        app()->instance('App\Lead', $lead->getMock());

        $response = $this->call('POST', '/leads', [
            'name' => 'Domeniqque',
            'phone' => '96 9655-6546',
            'email' => 'domeniqque@hotmail.com'
        ]);

        $response->assertStatus(200)
            ->assertViewIs('appointment_success');
    }
}
