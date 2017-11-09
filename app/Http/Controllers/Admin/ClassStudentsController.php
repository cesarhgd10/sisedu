<?php

namespace SisEdu\Http\Controllers\Admin;

use Illuminate\Http\Request;
use SisEdu\Http\Controllers\Controller;
use SisEdu\Http\Requests\ClassStudentRequest;
use SisEdu\Models\ClassInformation;

class ClassStudentsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \SisEdu\Models\ClassInformation $class_information
	 *
	 * @return \Illuminate\Http\Response|\Illuminate\Database\Eloquent\Collection
	 */
    public function index(Request $request, ClassInformation $class_information)
    {
	    if(!$request->ajax()) {
		    return view('admin.class_informations.class_student', compact('class_information'));
	    } else {
	    	return $class_information->students()->get();
	    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \SisEdu\Http\Requests\ClassStudentRequest  $request
     * @param \SisEdu\Models\ClassInformation $class_information
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ClassStudentRequest $request, ClassInformation $class_information)
    {
        $student = Student::find($request->get('student_id'));
        $class_information->students->save($student);
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
