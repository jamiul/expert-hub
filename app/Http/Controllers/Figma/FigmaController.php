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



    //Client Dashboard

    public function clientdashboard()
    {
        return view('figma-html.clientdashboard');
    }

    public function clientdashboardhome()
    {
        return view('figma-html.clientdashboardhome');
    }

    public function clientdashboardallcontact()
    {
        return view('figma-html.clientdashboardallcontact');
    }

    public function clientdashboardexperthire()
    {
        return view('figma-html.clientdashboardexperthire');
    }

    public function clientdashboardexpertconsultant()
    {
        return view('figma-html.clientdashboardexpertconsultant');
    }

    public function clientdashboardexpertconsultantteam()
    {
        return view('figma-html.clientdashboardexpertconsultantteam');
    }

    public function clientdashboardexpertsave()
    {
        return view('figma-html.clientdashboardexpertsave');
    }

    public function clientaddpayment()
    {
        return view('figma-html.clientaddpayment');
    }

    public function clientvisapaypalpayment()
    {
        return view('figma-html.clientvisapaypalpayment');
    }

    public function clientaddpaymentdouable()
    {
        return view('figma-html.clientaddpaymentdouable');
    }



    public function clientweeklyreportsummary()
    {
        return view('figma-html.clientweeklyreportsummary');
    }


    public function clientweeklyreportsummarydate()
    {
        return view('figma-html.clientweeklyreportsummarydate');
    }




    public function clientweeklytotalreport()
    {
        return view('figma-html.clientweeklytotalreport');
    }

    public function clientdashboardallport()
    {
        return view('figma-html.clientdashboardallport');
    }

    public function clientweeklyreporttransaction()
    {
        return view('figma-html.clientweeklyreporttransaction');
    }



    public function clientweeklyreporttwobudget()
    {
        return view('figma-html.clientweeklyreporttwobudget');
    }



    public function clientdashboardatimesheet()
    {
        return view('figma-html.clientdashboardatimesheet');
    }


    public function clientdashboardpasswordsecurity()
    {
        return view('figma-html.clientdashboardpasswordsecurity');
    }



    public function clientdashboardnotificationsettting()
    {
        return view('figma-html.clientdashboardnotificationsettting');
    }

// Admin dashboard


    public function admindashboardhome()
    {
        return view('figma-html.admindashboardhome');
    }


    public function admindashboardclient()
    {
        return view('figma-html.admindashboardclient');
    }


    public function admindashboardexpert()
    {
        return view('figma-html.admindashboardexpert');
    }

    public function frontentdashboardhome()
    {
        return view('figma-html.frontentdashboardhome');
    }

    public function frontentdashboardabout()
    {
        return view('figma-html.frontentdashboardabout');
    }



    //End Client Dashboard


    //Start  Expert Login 

    public function experthboardlogin()
    {
        return view('figma-html.experthboardlogin');
    }

    public function experthboardloginform()
    {
        return view('figma-html.experthboardloginform');
    }

    

    public function clientdashboardloginform()
    {
        return view('figma-html.clientdashboardloginform');
    }


    public function trainingcheckout()
    {
        return view('figma-html.trainingcheckout');
    }


    //End  Expert Login 



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
    public function expertworkdiary()
    {
        return view('figma-html.expert-work-diary');
    }
    public function expertproposal()
    {
        return view('figma-html.expert-proposals');
    }
    public function expertjoboffer()
    {
        return view('figma-html.expert-job-offer');
    }
    public function expertgetpaid()
    {
        return view('figma-html.expert-get-paid');
    }
    public function expertpasswordsecurity()
    {
        return view('figma-html.expert-password-security');
    }
    public function expertidverify()
    {
        return view('figma-html.expert-id-verify');
    }
    public function expertnotificationsettings()
    {
        return view('figma-html.expert-notification-settings');
    }
    public function expertsavedjobs()
    {
        return view('figma-html.expert-saved-jobs');
    }
    // -------- Expert Dashboard pages------------
}
