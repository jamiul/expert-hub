<?php

namespace App\Http\Controllers;

use App\Models\ParentSkill;
use Illuminate\Http\Request;


class ParentSkillController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:show freelancer skills'])->only('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $skills = ParentSkill::first()->paginate(10);
        return view('admin.default.freelancer.ParentSkills.index', compact('skills'));

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill = new ParentSkill;
        $skill->name = $request->name;
        if ($skill->save()) {
            flash(translate('New Skill has been inserted successfully'))->success();
            return redirect()->route('parent_skills.index');
        }
        else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = ParentSkill::findOrFail(decrypt($id));
        return view('admin.default.freelancer.ParentSkills.edit', compact('skill'));
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
        $skill = ParentSkill::findOrFail($id);
        $skill->name = $request->name;
        if ($skill->save()) {
            flash(translate('Skill has been Updated successfully'))->success();
            return redirect()->route('parent_skills.index');
        }
        else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = ParentSkill::findOrFail($id);
        if(ParentSkill::destroy($id)){
            flash(translate('Skill Info has been deleted successfully'))->success();
            return redirect()->route('parent_skills.index');
        }
        else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }
}
