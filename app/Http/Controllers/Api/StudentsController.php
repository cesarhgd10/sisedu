<?php

namespace SisEdu\Http\Controllers\Api;

use Illuminate\Http\Request;
use SisEdu\Http\Controllers\Controller;
use SisEdu\Models\Student;

class StudentsController extends Controller
{
    public function index()
    {
    	return Student::all();
    }
}
