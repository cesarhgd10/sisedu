<?php

namespace SisEdu\Http\Controllers\Api;

use Illuminate\Http\Request;
use SisEdu\Http\Controllers\Controller;
use SisEdu\Models\Student;

class StudentsController extends Controller
{
    public function index(Request $request)
    {
    	$search = $request->get('q');

    	return !$search ? [] : Student::whereHas('user', function($query) use ($search) {
		                          $query->where('users.name', 'LIKE', "%{$search}%");
	                           })->take(10)->get();
    }
}
