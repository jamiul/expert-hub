<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Frontend\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

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

    public function aboutUs()
    {
        return view('admin.about-us.index');
    }

    public function projectPayment()
    {
        return view('figma.adminpayment');
    }

    public function reviewList()
    {
        return view('figma.adminpaymentprogress');
    }
}
