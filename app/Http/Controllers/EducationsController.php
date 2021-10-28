<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::latest()->paginate(5);
        return view('educations.index', compact('educations'))->with('i', (request()->input('page', 5) - 1) * 5);
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
                'name'  => 'education_name',
                'label' => 'Opleidingsnaam'
            ],
            [
                'name'  => 'date_start',
                'label' => 'Start datum',
                'type'  => 'date'
            ],
            [
                'name'  => 'date_end',
                'label' => 'Eind datum',
                'type' => 'date'
            ],
        ];

        return view('educations.create', compact('formInputs'));
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
            'education_name' => 'required',
            'date_start' => 'required',
            'date_end'   => 'required',
        ]);

        Education::create($request->all());

        return redirect()->route('educations.index')->with('success', 'Opleiding created successfully');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
    }
}
