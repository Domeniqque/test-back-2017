<?php

namespace App\Http\Controllers;

use App\Doctor;

class HomeController extends Controller
{
    public function index(Doctor $doctor)
    {
        $doctors = $doctor->all();

        return view('index', compact('doctors'));
    }
}
