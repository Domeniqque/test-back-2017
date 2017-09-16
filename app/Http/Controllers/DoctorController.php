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

    /**
     * DoctorController constructor.
     * @param Doctor $doctor
     */
    public function __construct(Doctor $doctor)
    {
        $this->model = $doctor;
    }

    /**
     * Return all doctors in database
     * @return \Illuminate\Http\JsonResponse
     */
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

    /**
     * Display a doctor
     * @param Doctor $doctor
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Doctor $doctor)
    {
        return view('doctor', compact('doctor'));
    }
}
