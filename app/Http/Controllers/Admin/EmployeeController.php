<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Frontend\Controller;
use App\Models\Address;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Hash;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index($type)
    {
        $role = Role::where('name', $type)->first();
        $userRoles = UserRole::where('role_id', $role->id)->paginate(10);

        return view('admin.employees.index', compact('userRoles', 'role'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function show($id)
    {
        $userRole = UserRole::findOrFail(decrypt($id));

        return view('admin.employees.set_access_permission', compact('userRole'));
    }

    public function edit($id)
    {
        $user = User::findOrFail(decrypt($id));

        return view('admin.employees.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;

        if (strlen($request->password) > 0) {
            $user->password = Hash::make($request->password);
        }
        if ($request->hasFile('avatar')) {
            $user->photo = $request->file('avatar')->store('uploads/avatar');
        }
        if ($user->save()) {
            $userRole = UserRole::where('user_id', $user->id)->first();
            $userRole->role_id = $request->designation;
            $userRole->save();
            $address = Address::where('addressable_id', $user->id)->first();
            $address->street = $request->street;
            $address->country_id = $request->country_id;
            $address->city_id = $request->city_id;
            $address->postal_code = $request->postal_code;
            $address->phone = $request->phone;
            $user->address()->save($address);
            flash(translate('Employee Info has been updated successfully'))->success();

            return redirect()->route('employees.index', Role::find($request->designation)->name);
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();

            return back();
        }
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->photo = $request->avatar;

        if ($user->save()) {
            $userRole = new UserRole;
            $userRole->user_id = $user->id;
            $userRole->role_id = $request->designation;
            $userRole->permissions = "[]";
            $userRole->save();
            $address = new Address(['street' => $request->street, 'country_id' => $request->country_id, 'city_id' => $request->city_id, 'postal_code' => $request->postal_code, 'phone' => $request->phone]);
            $user->address()->save($address);
            flash(translate('New Employee has been appointed successfully'))->success();

            return redirect()->route('employees.index', Role::find($request->designation)->name);
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();

            return back();
        }
    }

    public function destroy($id)
    {
        $userRole = UserRole::where('user_id', $id)->first();
        $user = User::findOrFail($id);
        if (UserRole::destroy($userRole->id)) {
            $user->address()->where('addressable_id', $id)->delete();
            User::destroy($id);
            flash(translate('Employee has been deleted successfully'))->success();
            return redirect()->back();
        } else {
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }

    public function permissionUpdate(Request $request, $id)
    {
        $userRole = UserRole::findOrFail($id);
        if ($request->has('permissions')) {
            $userRole->permissions = json_encode($request->permissions);
            if ($userRole->save()) {
                flash(translate('Permission has been updated successfully'))->success();
                return redirect()->back();
            }
        } else {
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }
}
