<?php

namespace App\Http\Controllers;

use App\Lead;

class LeadController extends Controller
{
    protected $model;

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

        $this->model->create(request(['email', 'email', 'phone']));

        return view('appointment_success');
    }
}
