<?php

namespace Tests\Feature;

use App\Mail\AppointmentMarked;
use Illuminate\Support\Facades\Mail;
use Mockery\Mock;
use Tests\TestCase;

class LeadTest extends TestCase
{
    /**
     * @var Mock
     */
    protected $lead;

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
        $response = $this->createLead();

        $this->lead->shouldHaveReceived('create')->once();

        $response->assertStatus(200)
            ->assertViewIs('appointment_success');
    }

    public function testIfSendEmailToAdmin()
    {
        Mail::fake();
        $response = $this->createLead();

        $response->assertStatus(200);

        Mail::assertSent(AppointmentMarked::class);
    }

    private function createLead()
    {
        app()->instance(
            'App\Lead',
            $this->lead = \Mockery::spy('App\Lead')
        );

        return $this->call('POST', '/leads', [
            'name' => 'Domeniqque Dylluar',
            'phone' => '96 9655-6546',
            'email' => 'domeniqque@hotmail.com'
        ]);
    }
}
