<?php

namespace App\Http\Controllers;

use App\Doctor;

class DoctorController extends Controller
{
    /**
     * Doctor model
     * @var Doctor
     */
    protected $model;

    public function __construct(Doctor $doctor)
    {
        $this->model = $doctor;
    }
}
