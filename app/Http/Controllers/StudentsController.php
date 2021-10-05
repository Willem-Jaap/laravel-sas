<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->paginate(5);
        return view('students.index', compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);
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
                'name' => 'first_name',
                'label' => 'Voornaam'
            ],
            [
                'name' => 'initials',
                'label' => 'Initialen'
            ],
            [
                'name' => 'insertion',
                'label' => 'Tussenvoegsel'
            ],
            [
                'name' => 'last_name',
                'label' => 'Achternaam'
            ],
            [
                'name' => 'postal_code',
                'label' => 'Postcode'
            ],
            [
                'name' => 'street',
                'label' => 'Straatnaam'
            ],
            [
                'name' => 'number',
                'label' => 'Nummer'
            ],
            [
                'name' => 'number_addition',
                'label' => 'Toevoeging'
            ],
            [
                'name' => 'city',
                'label' => 'Stad / Dorp'
            ],
        ];

        return view('students.create', compact('formInputs'));
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
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
