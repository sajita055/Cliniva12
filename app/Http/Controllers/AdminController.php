<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminControllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function doctor_view()
    {
        return view('admin.doctor_view');
    }
}
