<?php

namespace App\Http\Controllers;

use DB;
use File;
use Schema;
use ZipArchive;

class DemoController extends Controller
{
    public function __construct()
    {

        if (env('DEMO_MODE') != 'On') {
            return false;
        }

        ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', 600);
    }

    public function cron_1()
    {
        $this->drop_all_tables();
        $this->import_demo_sql();
    }

    public function drop_all_tables()
    {
        Schema::disableForeignKeyConstraints();
        foreach (DB::select('SHOW TABLES') as $table) {
            $table_array = get_object_vars($table);
            Schema::drop($table_array[key($table_array)]);
        }
    }

    public function import_demo_sql()
    {
        $sql_path = base_path('scholarship.sql');
        DB::unprepared(file_get_contents($sql_path));
    }

    public function cron_2()
    {
        $this->remove_folder();
        $this->extract_uploads();
    }

    public function remove_folder()
    {
        File::deleteDirectory(base_path('public/uploads'));
    }

    public function extract_uploads()
    {
        $zip = new ZipArchive;
        $zip->open(base_path('public/uploads.zip'));
        $zip->extractTo('public/uploads');
    }

    // -------- Consultant Registration pages------------

    public function consultantLogin()
    {
        return view('frontend.consultantlogin');
    }

    public function consultantSignup()
    {
        return view('frontend.consultantsignup');
    }

    public function consultantVerifyEmail()
    {
        return view('frontend.consultantverifyemail');
    }

    public function consultantVerifyYourEmail()
    {
        return view('frontend.consultantverifyyouremail');
    }

    public function profileSetup()
    {
        return view('frontend.profilesetup');
    }

    public function profileDetails()
    {
        return view('frontend.profiledetails');
    }

    public function profileExpertises()
    {
        return view('frontend.profileexpertises');
    }

    public function profileEducation()
    {
        return view('frontend.profileeducation');
    }

    public function profileConsultation()
    {
        return view('frontend.profileconsultation');
    }

    public function profileExpertisesPopup()
    {
        return view('frontend.profileexpertisespopup');
    }

    public function profileConsultationBooks()
    {
        return view('frontend.profileconsultationbooks');
    }

    public function profileConsultationInterview()
    {
        return view('frontend.profileconsultationinterview');
    }

    public function profileBiography()
    {
        return view('frontend.profilebiography');
    }

    public function profilePicture()
    {
        return view('frontend.profilepicture');
    }

    public function profileCompleted()
    {
        return view('frontend.profilecompleted');
    }

    // -------- Client Registration pages------------
    public function clientLogin()
    {
        return view('frontend.clientlogin');
    }

    public function clientSignup()
    {
        return view('frontend.clientsignup');
    }

    public function clientVerifyEmail()
    {
        return view('frontend.clientverifyemail');
    }

    public function clientVerifyYourEmail()
    {
        return view('frontend.clientverifyyouremail');
    }
}
