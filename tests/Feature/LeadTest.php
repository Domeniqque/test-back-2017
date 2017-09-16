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

    public function testIfCreateAndRedirectToAppointmentSuccessView()
    {
        [$_, $response] = $this->createLead();
        $this->lead->shouldHaveReceived('create')->once();

        $response->assertStatus(302)
            ->assertRedirect(route('leads.success'));
    }

    public function testIfSendEmailToAdmin()
    {

        [$lead, $response] = $this->createLead();

        $response->assertStatus(302);

        Mail::assertSent(AppointmentMarked::class, function ($mail) use ($lead) {
            return $mail->hasTo($lead['email']);
        });
    }

    private function createLead()
    {
        app()->instance(
            'App\Lead',
            $this->lead = \Mockery::spy('App\Lead')
        );

        $lead = [
            'name' => 'Domeniqque Dylluar',
            'phone' => '96 0000-6546',
            'email' => str_random(12) . '@hotmail.com'
        ];

        Mail::fake();

        $response = $this->post('/leads', $lead);

        return [$lead, $response];
    }
}
