<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $teachers=Teacher::get();
         $numberOfStudents = Student::groupBy('class_id')
         ->selectRaw('class_id, COUNT(*) as No_of_Students')
         ->get();

         dd($numberOfStudents);
         $route=route('Classes.store');
         return view('layouts.classes.form',['teachers' => $teachers,'numberOfStudents'=>$numberOfStudents,'route'=>$route]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
       $data =$request->validate(

          [
            'class'=>'required',
            'teacher_id'=>'required',
            
         ]

    );
        $classes= Classes::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classes=Classes::with('students','teacher')->get();

        return view('layouts.classes.ClassList',[
            'classes'=>$classes,

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
