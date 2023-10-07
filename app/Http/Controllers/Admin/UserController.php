<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Frontend\Controller;
use App\Models\ExpertAccount;
use App\Models\User;
use App\Models\UserProfile;
use Cache;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show all experts'])->only('all_experts');
        $this->middleware(['permission:show all clients'])->only('all_clients');
    }

    public function allExperts(Request $request)
    {
        $sortSearch = null;
        $colName = null;
        $query = null;
        $experts = UserProfile::query();

        $userIds = User::where(
            function ($user) use ($sortSearch) {
                $user->where('user_type', 'expert');
            }
        )->pluck('id')->toArray();

        $experts = $experts->where(
            function ($expert) use ($userIds) {
                $expert->whereIn('user_id', $userIds);
            }
        );

        if ($request->search != null || $request->type != null) {
            if ($request->has('search')) {
                $sortSearch = $request->search;
                $userIds = User::where(
                    function ($user) use ($sortSearch) {
                        $user->where('user_type', 'expert')->where('name', 'like', '%' . $sortSearch . '%')->orWhere('email', 'like', '%' . $sortSearch . '%');
                    }
                )->pluck('id')->toArray();

                $experts = $experts->where(
                    function ($expert) use ($userIds) {
                        $expert->whereIn('user_id', $userIds);
                    }
                );
            }
            if ($request->type != null) {
                $var = explode(",", $request->type);
                $colName = $var[0];
                $query = $var[1];
                $experts = $experts->orderBy($colName, $query);
            }

            $experts = $experts->paginate(10);
        } else {
            $experts = $experts->orderBy('created_at', 'desc')->paginate(10);
        }

        return view('admin.expert.experts.index', compact('experts', 'sortSearch', 'colName', 'query'));
    }

    public function login($id)
    {
        $user = User::findOrFail(decrypt($id));
        auth()->login($user, true);

        return redirect()->route('dashboard');
    }


    public function allClients(Request $request)
    {
        $sortSearch = null;
        $colName = null;
        $query = null;
        $clients = UserProfile::query();

        $userIds = User::where(
            function ($user) use ($sortSearch) {
                $user->where('user_type', 'client');
            }
        )->pluck('id')->toArray();

        $experts = $clients->where(
            function ($expert) use ($userIds) {
                $expert->whereIn('user_id', $userIds);
            }
        );

        if ($request->search != null || $request->type != null) {
            if ($request->has('search')) {
                $sortSearch = $request->search;
                $userIds = User::where(
                    function ($user) use ($sortSearch) {
                        $user->where('user_type', 'client')->where('name', 'like', '%' . $sortSearch . '%')->orWhere('email', 'like', '%' . $sortSearch . '%');
                    }
                )->pluck('id')->toArray();
                $clients = $clients->where(
                    function ($client) use ($userIds) {
                        $client->whereIn('user_id', $userIds);
                    }
                );
            }
            if ($request->type != null) {
                $var = explode(",", $request->type);
                $colName = $var[0];
                $query = $var[1];
                $clients = $clients->orderBy($colName, $query);
            }

            $clients = $clients->paginate(10);
        } else {
            $clients = $clients->orderBy('created_at', 'desc')->paginate(10);
        }
        return view('admin.client.clients.index', compact('clients', 'sortSearch', 'colName', 'query'));
    }

    public function expertDetails($userName)
    {
        $user = User::where('user_name', $userName)->first();
        $userProfile = UserProfile::where('user_id', $user->id)->first();
        $userAccount = ExpertAccount::where('user_id', $user->id)->first();

        return view('admin.expert.experts.show', compact('user', 'userAccount', 'userProfile'));
    }

    public function clientDetails($userName)
    {
        $user = User::where('user_name', $userName)->first();
        $userProfile = UserProfile::where('user_id', $user->id)->first();
        $userAccount = ExpertAccount::where('user_id', $user->id)->first();
        $projects = $user->number_of_projects()->paginate(10);

        return view('admin.client.clients.show', compact('user', 'userProfile', 'userAccount', 'projects'));
    }

    public function userOnlineStatus()
    {
        $users = User::all();

        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id)) {
                echo "User " . $user->name . " is online.";
            } else {
                echo "User " . $user->name . " is offline.";
            }
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->banned) {
            $user->banned = 0;
            $user->save();
            flash(translate('User has been unbanned successfully'))->success();
        } else {
            $user->banned = 1;
            $user->save();
            flash(translate('User has been banned successfully'))->success();
        }
        return back();
    }

    public function setAccountType(Request $request)
    {
        auth()->user()->user_type = $request->user_type;

        if (auth()->user()->save()) {
            session()->forget('new_user');
        }

        flash(translate('User account type set successfully'))->success();
        return back();
    }
}
