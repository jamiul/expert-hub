<?php

namespace App\Http\Controllers\Frontend;

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
        $parentExpertiseList = Expertise::with('childrens')->whereNull('parent_id')->get();

        $allExpertiseList = Expertise::latest()->paginate(50);

        return view('admin.expert.expertise.index', compact('parentExpertiseList', 'allExpertiseList'));
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
        return view('admin.expert.create');
    }

    public function edit($id)
    {
        $expertiseList = Expertise::with('childrens')->whereNull('parent_id')->paginate(10);
        $expertise = Expertise::findOrFail($id);

        return view('admin.expert.expertise.edit', compact('expertiseList', 'expertise'));
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
