<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Frontend\Controller;
use App\Models\Badge;
use App\Repositories\Badge\BadgeInterface;
use Illuminate\Http\Request;

class BadgeController extends Controller
{
    protected $repository;

    public function __construct(BadgeInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        list($badges, $role) = $this->repository->getBadgesAndRole('expert');
        return view('admin.expert.badges.index', compact('badges', 'role'));
    }

    public function clientBadgesIndex()
    {
        list($badges, $role) = $this->repository->getBadgesAndRole('client');
        return view('admin.client.badges.index', compact('badges', 'role'));
    }

    public function store(Request $request)
    {
        $badge = new Badge;
        $badge->name = $request->name;
        $badge->type = $request->type;
        $badge->value = $request->value;
        $badge->role_id = $request->role_id;
        $badge->icon = $request->icon;
        $badge->save();

        flash(translate('New Badge has been updated successfully!'))->success();
        if ($request->role_id == "expert") {
            return redirect()->route('badges.index');
        }
        if ($request->role_id == "client") {
            return redirect()->route('client_badges_index');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $badge = Badge::findOrFail(decrypt($id));
        return view('admin.expert.badges.edit', compact('badge'));
    }

    public function clientBadgesEdit($id)
    {
        $badge = Badge::findOrFail(decrypt($id));
        return view('admin.client.badges.edit', compact('badge'));
    }

    public function update(Request $request, $id)
    {
        $badge = Badge::findOrFail($id);
        $badge->name = $request->name;
        $badge->type = $request->type;
        $badge->value = $request->value;
        $badge->icon = $request->icon;
        $badge->save();

        flash(translate('New Badge has been updated successfully!'))->success();
        if ($request->role_id == "expert") {
            return redirect()->route('badges.index');
        }
        if ($request->role_id == "client") {
            return redirect()->route('client_badges_index');
        }
    }

    public function destroy($id)
    {
        $badge = Badge::destroy($id);
        flash(translate('Badge has been deleted successfully'))->success();
        return back();
    }
}