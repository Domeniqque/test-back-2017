<?php

namespace App\Http\Controllers;

use App\Lead;
use App\Mail\AppointmentMarked;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    /**
     * @var Lead
     */
    protected $model;

    /**
     * LeadController constructor.
     * @param Lead $lead
     */
    public function __construct(Lead $lead)
    {
        $this->model = $lead;
    }

    /**
     * Store a lead
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $lead = $this->model->create(request(['name', 'email', 'phone']));

        Mail::to(request('email'))
            ->send(new AppointmentMarked($lead));

        return redirect()->route('leads.success');
    }

    /**
     * Redirect to page appointment success
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function success()
    {
        return view('appointment_success');
    }
}
