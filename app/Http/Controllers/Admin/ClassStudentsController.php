<?php

namespace SisEdu\Http\Controllers\Admin;

use Illuminate\Http\Request;
use SisEdu\Http\Controllers\Controller;
use SisEdu\Models\ClassInformation;

class ClassStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \SisEdu\Models\ClassInformation $class_information
     * @return \Illuminate\Http\Response
     */
    public function index(ClassInformation $class_information)
    {
        return view('admin.class_informations.class_student', compact('class_information'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
