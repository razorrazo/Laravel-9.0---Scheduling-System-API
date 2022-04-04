<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student=Student::all();
        return $student;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexclasses(Request $request)
    {
        //
        $student=Student::all();
        $groups= Group::all();

        //return student first then groups
        //return ['student' => $student, 'groups' => $groups];
       
       //return student with their groups
        return $student->load('groups');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //no es necesario, usamos una API

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recibe un request o una solicitud, en el cual viene la info necesaria para tener los datos y crear al estudiante
        //entro al modelo y al request le digo que acceda a toda la información
   
    $student= new Student();
    $student->first_name=$request->first_name;
    $student->last_name=$request->last_name;

    $student->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student=Student::find($id);
        if (!$student) {
            return response()->json(['error' => 'Student Not Found'], 404);
        }
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $student=Student::find($request->id);
        if (!$student) {
            return response()->json(['error' => 'Student Not Found'], 404);
        }
        $student->first_name=$request->first_name;
        $student->last_name=$request->last_name;
        
        $student->save();
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $student=Student::find($request->id);
        if (!$student) {
            return response()->json(['error' => 'Student Not Found'], 404);
        }
        $student->delete();
        return $student;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filterclasses($id)
    {
        //
        $student=Student::find($id);
        $groups= Group::all();

        //return student first then groups
        //return ['student' => $student, 'groups' => $groups];
       
        //return student with their groups
        return $student->load('groups');
    }


}
