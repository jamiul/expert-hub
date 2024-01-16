<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Frontend\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function projectList()
    {
        return view('figma.admin-projects');
    }

    public function clientList()
    {
        return view('figma.admindashboardclient');
    }

    public function expertList()
    {
        return view('figma.admindashboardexpert');
    }

    public function homePage()
    {
        return view('figma.frontentdashboardhome');
    }

    public function projectPayment()
    {
        return view('figma.adminpayment');
    }

    public function reviewList()
    {
        return view('figma.adminpaymentprogress');
    }

    public function notifications()
    {

        return view('admin.notifications');
    }
}
