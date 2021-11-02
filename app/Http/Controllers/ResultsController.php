<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Lesson;
use App\Models\Result;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = DB::table('results') 
            ->leftJoin('students', 'results.student_id', '=', 'students.id')
            ->leftJoin('educations', 'results.education_id', '=', 'educations.id')
            ->leftJoin('lessons', 'results.lesson_id', '=', 'lessons.id')
            ->get();

        return view('results.index', compact('results'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formInputs = [
            [
                'name'  => 'student_id',
                'label' => 'Student',
                'type'  => 'select',
                'options' => 'students',
                'key'   => 'id',
                'value' => 'first_name'
            ],
            [
                'name'  => 'education_id',
                'label' => 'Opleiding',
                'type'  => 'select',
                'options' => 'educations',
                'key'   => 'id',
                'value' => 'education_name'
            ],
            [
                'name'  => 'lesson_id',
                'label' => 'Vak',
                'type'  => 'select',
                'options' => 'lessons',
                'key'   => 'id',
                'value' => 'lesson_name'
            ],
            [
                'name'  => 'result',
                'label' => 'Cijfer',
                'type'  => 'number',
            ],
        ];

        $results = Result::all();
        $lessons = Lesson::all();
        $students = Student::all();
        $educations = Education::all();

        return view('results.create', compact('formInputs'))->with('results', $results)->with('students', $students)->with('educations', $educations)->with('lessons', $lessons);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request);exit;
        $request->validate([
            'student_id' => 'required',
            'education_id' => 'required',
            'lesson_id' => 'required',
            'result' => 'required',
        ]);

        Result::create($request->all());

        return redirect()->route('results.index')->with('success', 'Les created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
