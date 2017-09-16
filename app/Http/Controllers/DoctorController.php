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

    public function all()
    {
        $doctors = $this->model->all()->map(function ($doctor) {
            return [
                "id" => $doctor->id,
                "name" => $doctor->name,
                "speciality" => $doctor->speciality,
                "phone" => $doctor->phone,
                "description" => $doctor->description,
                "photo" => asset($doctor->photo),
                "last_update" => $doctor->updated_at->format('Y-m-d H:m:s'),
            ];
        });

        return response()->json([
            "total" => $doctors->count(),
            "data" => $doctors
        ]);
    }

    public function show(Doctor $doctor)
    {
        return view('doctor', compact('doctor'));
    }
}
