<?php
/**
 * Created by PhpStorm.
 * User: Aunok
 * Date: 12/19/2019
 * Time: 4:37 PM
 */

namespace App\Utility;

class RoleUtility
{
    public static function isOfficeUser()
    {
        return auth()->user()->userRoles->first()->role->name == "Admin" || auth()->user()->userRoles->first()->role->role_type == "employee";
    }
}
