<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts = Expertise::with('childrens')->whereNull('parent_id')->get();

        $allExpertList = Expertise::latest()->paginate(50);

        // $allExpertLists = Experts->where('parent_id',"id")->get();
        // dd($allExpertList);
        return view('admin.freelancer.Experts.index', compact('experts', 'allExpertList'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:experts,id',
            ]
        );

        Expertise::create($data);

        return redirect()->route('expertise.index')->with('success', 'Expertise created successfully.');
    }

    public function create()
    {
        // Logic for showing the Experts creation form
        return view('admin.freelancer.create');
    }

    public function edit($id)
    {
        $experts = Expertise::with('childrens')->whereNull('parent_id')->paginate(10);
        $expert = Expertise::findOrFail($id);
        return view('admin.freelancer.Experts.edit', compact('expert', 'experts'));
    }

    public function update(Request $request, $id)
    {
        $skill = Expertise::findOrFail($id);
        $skill->name = $request->name;
        $skill->parent_id = $request->parent_id;
        if ($skill->save()) {
            flash(translate('Experts has been Updated successfully'))->success();
            return redirect()->route('expertise.index');
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function destroy($id)
    {
        if (Expertise::destroy($id)) {
            flash(translate('Experts Info has been deleted successfully'))->success();
            return redirect()->route('expertise.index');
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }
}
