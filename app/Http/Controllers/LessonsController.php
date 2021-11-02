<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::latest()->paginate(5);

        return view('lessons.index', compact('lessons'))->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('lessons.index', compact('lessons'))->with('educations');
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

        $educations = Education::all();

        return view('lessons.create', compact('formInputs'))->with('educations', $educations);
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
            'lesson_name' => 'required',
        ]);

        Lesson::create($request->all());
        return redirect()->route('lessons.index')->with('success', 'Les created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        $formInputs = $this->form();
        $formInputs['method'] = 'update';
        $formInputs['model'] = 'lesson';

        return view('lessons.edit', compact('formInputs'))->with('lesson', $lesson);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        $request->validate([
            'lesson_name' => 'required',
        ]);

        $lesson->update($request->all());

        return redirect()->route('lessons.index')->with('success', 'Les updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $result = Lesson::find($id);
        $result->delete();

        return redirect()->route('lessons.index')->with('success', 'Lesson deleted successfully');
    }

    private function form()
    {
        $formInputs = [
            [
                'name'  => 'lesson_name',
                'label' => 'Lesnaam'
            ],
        ];

        return $formInputs;
    }
}
