<?php

namespace App\Http\Controllers\Figma;

use App\Http\Controllers\Frontend\Controller;

class FigmaController extends Controller
{
    // -------- Consultant Registration pages------------

    public function consultantLogin()
    {
        return view('figma-html.consultantlogin');
    }

    public function consultantSignup()
    {
        return view('figma-html.consultantsignup');
    }

    public function consultantVerifyEmail()
    {
        return view('figma-html.consultantverifyemail');
    }

    public function consultantVerifyYourEmail()
    {
        return view('figma-html.consultantverifyyouremail');
    }

    public function profileSetup()
    {
        return view('figma-html.profilesetup');
    }

    public function profileDetails()
    {
        return view('figma-html.profiledetails');
    }

    public function profileExpertises()
    {
        return view('figma-html.profileexpertises');
    }

    public function profileEducation()
    {
        return view('figma-html.profileeducation');
    }

    public function profileConsultation()
    {
        return view('figma-html.profileconsultation');
    }

    public function profileExpertisesPopup()
    {
        return view('figma-html.profileexpertisespopup');
    }

    public function profileConsultationBooks()
    {
        return view('figma-html.profileconsultationbooks');
    }

    public function profileConsultationInterview()
    {
        return view('figma-html.profileconsultationinterview');
    }

    public function profileConsultationMediaInterview()
    {
        return view('figma-html.profileconsultationmediainterview');
    }
    
    public function profileBiography()
    {
        return view('figma-html.profilebiography');
    }

    public function profilePicture()
    {
        return view('figma-html.profilepicture');
    }

    public function profileCompleted()
    {
        return view('figma-html.profilecompleted');
    }

    // -------- Client Registration pages------------
    public function clientLogin()
    {
        return view('figma-html.clientlogin');
    }

    public function clientSignup()
    {
        return view('figma-html.clientsignup');
    }

    public function clientVerifyEmail()
    {
        return view('figma-html.clientverifyemail');
    }

    public function clientVerifyYourEmail()
    {
        return view('figma-html.clientverifyyouremail');
    }
// -------- Expert Dashboard pages------------
    public function expertdashboard()
    {
        return view('figma-html.expert-dashboard');
    }

    public function expertprofile()
    {
        return view('figma-html.expert-profile');
    }

    public function expertstatus()
    {
        return view('figma-html.expert-status');
    }
    public function expertstatusproposal()
    {
        return view('figma-html.expert-status-proposal');
    }
    public function expertstatusanalytics()
    {
        return view('figma-html.expert-status-analytics');
    }
    public function expertactivecontract()
    {
        return view('figma-html.expert-active-contract');
    }
    public function expertallcontract()
    {
        return view('figma-html.expert-all-contract');
    }
    public function expertservices()
    {
        return view('figma-html.expert-services');
    }
    // -------- Expert Dashboard pages------------
}
