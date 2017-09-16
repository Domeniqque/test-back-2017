<?php

namespace App\Http\Controllers;

use App\Doctor;

class HomeController extends Controller
{
    /**
     * Display the index view
     * @param Doctor $doctor
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Doctor $doctor)
    {
        $doctors = $doctor->all();

        return view('index', compact('doctors'));
    }
}
