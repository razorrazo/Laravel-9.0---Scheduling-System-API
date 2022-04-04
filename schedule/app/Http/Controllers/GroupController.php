<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $group=Group::all();
        return $group;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexclasses(Request $request)
    {
        //
        $group= Group::all();
        $students=Student::all();

        //return student first then groups
        //return ['student' => $student, 'groups' => $groups];
       
       //return student with their groups
        return $group->load('students');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $group= new Group();
        $group->code=$request->code;
        $group->title=$request->title;
        $group->description=$request->description;
        
        $group->save();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $group=Group::find($id);
        if (!$group) {
            return response()->json(['error' => 'Class Not Found'], 404);
        }
        return $group;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupRequest  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $group=Group::find($request->id);
        if (!$group) {
            return response()->json(['error' => 'Class Not Found'], 404);
        }
        $group->code=$request->code;
        $group->title=$request->title;
        $group->description=$request->description;
        
        $group->save();
        return $group;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $group=Group::find($request->id);
        if (!$group) {
            return response()->json(['error' => 'Class Not Found'], 404);
        }
        $group->delete();
        return $group;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filterclasses($id)
    {
        //
        $group= Group::find($id);
        $students=Student::all();
        

        //return student first then groups
        //return ['student' => $student, 'groups' => $groups];
       
       //return student with their groups
        return $group->load('students');
    }
}
