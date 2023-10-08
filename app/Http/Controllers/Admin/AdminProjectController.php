<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Frontend\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show all projects'])->only('all_projects');
        $this->middleware(['permission:show running projects'])->only('running_projects');
        $this->middleware(['permission:show open projects'])->only('open_projects');
        $this->middleware(['permission:show cancelled projects'])->only('cancelled_projects');
    }

    //Admin can see all projects in admin panel
    public function allProjects(Request $request)
    {
        $colName = null;
        $query = null;
        $sortSearch = null;
        $clientId = null;

        if ($request->search != null || $request->type != null) {
            if ($request->has('user_id') && $request->user_id != null) {
                $products = Project::where('client_user_id', $request->user_id);
                $clientId = $request->user_id;
            }
            if ($request->search != null) {
                $projects = Project::where('name', 'like', '%' . $request->search . '%');
                $sortSearch = $request->search;
            }
            if ($request->type != null) {
                $var = explode(",", $request->type);
                $colName = $var[0];
                $query = $var[1];
                $projects = Project::orderBy($colName, $query);
            }
            $projects = $projects->latest()->paginate(12);
        } else {
            $projects = Project::latest()->paginate(12);
        }
        return view('admin.project.projects.index', compact('projects', 'colName', 'query', 'sortSearch', 'clientId'));
    }

    //Admin can see all running projects in admin panel
    public function runningProjects(Request $request)
    {
        $sortSearch = null;
        $clientId = null;

        $projects = Project::biddisable()->open()->notcancel()->latest();

        if ($request->has('user_id') && $request->user_id != null) {
            $products = $projects->where('client_user_id', $request->user_id);
            $clientId = $request->user_id;
        }
        if ($request->search != null) {
            $projects = $projects->where('name', 'like', '%' . $request->search . '%');
            $sortSearch = $request->search;
        }

        $projects = $projects->paginate(12);

        return view('admin.project.projects.running_projects', compact('projects', 'sortSearch', 'clientId'));
    }

    //Admin can see all open projects in admin panel
    public function openProjects(Request $request)
    {
        $colName = null;
        $query = null;
        $sortSearch = null;
        $clientId = null;

        if ($request->search != null || $request->type != null) {
            if ($request->has('user_id') && $request->user_id != null) {
                $products = Project::where('client_user_id', $request->user_id);
                $clientId = $request->user_id;
            }

            if ($request->search != null) {
                $projects = Project::where('name', 'like', '%' . $request->search . '%');
                $sortSearch = $request->search;
            }

            if ($request->type != null) {
                $var = explode(",", $request->type);
                $colName = $var[0];
                $query = $var[1];
                $projects = Project::orderBy($colName, $query);
            }
            $projects = $projects->biddable()->open()->notcancel()->paginate(12);
        } else {
            $projects = Project::biddable()->open()->notcancel()->latest()->paginate(12);
        }

        return view('admin.project.projects.open_projects', compact('projects', 'colName', 'query', 'sortSearch', 'clientId'));
    }

    //Admin can see all cancelled projects in admin panel
    public function cancelledProjects(Request $request)
    {
        $colName = null;
        $query = null;
        $sortSearch = null;
        $clientId = null;

        if ($request->search != null || $request->type != null) {
            if ($request->has('user_id') && $request->user_id != null) {
                $products = Project::where('client_user_id', $request->user_id);
                $clientId = $request->user_id;
            }
            if ($request->search != null) {
                $projects = Project::where('name', 'like', '%' . $request->search . '%');
                $sortSearch = $request->search;
            }
            if ($request->type != null) {
                $var = explode(",", $request->type);
                $colName = $var[0];
                $query = $var[1];
                $projects = Project::orderBy($colName, $query);
            }
            $projects = $projects->biddable()->open()->notcancel()->paginate(12);
        } else {
            $projects = Project::where('cancel_status', '1')->latest()->paginate(12);
        }

        return view('admin.project.projects.cancelled_projects', compact('projects', 'colName', 'query', 'sortSearch', 'clientId'));
    }

    public function projectApproval(Request $request)
    {
        $project = Project::findOrFail($request->id);
        $project->project_approval = $request->status;
        if ($project->save()) {
            return 1;
        } else {
            return 0;
        }
    }
}
