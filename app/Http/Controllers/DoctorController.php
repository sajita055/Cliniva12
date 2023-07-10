<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DoctorControllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function add_doctor()
    {
        return view('Doctor.add_doctor');
    }
}
