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
        $formInputs = $this->form();
        $formInputs['method'] = 'create';


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
        $request->validate([
            'first_name' => 'required',
            'initials' => 'required',
            'last_name' => 'required',
            'postal_code' => 'required',
            'street' => 'required',
            'number' => 'required',
            'city' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student created successfully');
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
        $formInputs = $this->form();
        $formInputs['method'] = 'update';
        $formInputs['model'] = 'student';

        return view('students.edit', compact('student'))->with('formInputs', $formInputs);
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
        $request->validate([
            'first_name' => 'required',
            'initials' => 'required',
            'last_name' => 'required',
            'postal_code' => 'required',
            'street' => 'required',
            'number' => 'required',
            'city' => 'required',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $result = Student::find($id);
        $result->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }



    private function form()
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

        return $formInputs;
    }
}
