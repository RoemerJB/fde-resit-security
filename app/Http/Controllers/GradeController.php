<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $grades = Grade::all();
        return view('grades.index', ['grades' => $grades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store()
    {
        Grade::create($this->validateGrade());

        return redirect(route('grades.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Grade $grade
     * @return Application|Factory|View|Response
     */
    public function show(Grade $grade)
    {
        return view('grades.index', ['grade'=>$grade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Grade $grade
     * @return Application|Factory|View|Response
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', ['grades' => $grade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Grade $grade
     * @param $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Grade $grade, Request $request)
    {
        $grade->update($request->all());

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Grade $grade
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect('/grades');
    }

    /**
     * @return array
     */
    public function validateGrade(): array
    {
        return request()->validate([
            'course_name' => 'required',
            'test_name' => 'required',
            'best_grade' => 'required'
        ]);
    }
}
