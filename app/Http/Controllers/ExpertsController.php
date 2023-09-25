<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Experts;
use Illuminate\Http\Request;

class ExpertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts = Experts::with('childrens')->whereNull('parent_id')->get();

        $allExpertList=Experts::latest()->paginate(200);

        // $allExpertLists = Experts->where('parent_id',"id")->get();
        // dd($allExpertList);
        return view('admin.default.freelancer.Experts.index', compact('experts','allExpertList'));
    }

    public function create()
    {
        // Logic for showing the Experts creation form
        return view('admin.default.freelancer.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:experts,id',
        ]);

        Experts::create($data);

        return redirect()->route('experts.index')->with('success', 'Experts created successfully.');
    }

    public function edit($id)
    {
        $experts = Experts::with('children')->whereNull('parent_id')->paginate(10);
        $expert = Experts::findOrFail($id);
        return view('admin.default.freelancer.Experts.edit', compact('expert','experts'));
    }

    public function update(Request $request, $id)
    {
        $skill = Experts::findOrFail($id);
        $skill->name = $request->name;
        $skill->parent_id = $request->parent_id;
        if ($skill->save()) {
            flash(translate('Experts has been Updated successfully'))->success();
            return redirect()->route('experts.index');
        }
        else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function destroy(Experts $experts)
    {
        $experts->delete();
        return redirect()->route('experts.index')->with('success', 'Experts deleted successfully.');
    }
}
