<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Schema;
use ZipArchive;
use File;

class DemoController extends Controller
{
    public function __construct()
    {

        if(env('DEMO_MODE') != 'On'){
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

    public function cron_2()
    {
        $this->remove_folder();
        $this->extract_uploads();
    }



    public function drop_all_tables()
    {
        Schema::disableForeignKeyConstraints();
        foreach(DB::select('SHOW TABLES') as $table) {
            $table_array = get_object_vars($table);
            Schema::drop($table_array[key($table_array)]);
        }
    }

    public function import_demo_sql() {
        $sql_path = base_path('scholarship.sql');
        DB::unprepared(file_get_contents($sql_path));
    }

    public function extract_uploads()
    {
        $zip = new ZipArchive;
        $zip->open(base_path('public/uploads.zip'));
        $zip->extractTo('public/uploads');

    }

    public function remove_folder()
    {
        File::deleteDirectory(base_path('public/uploads'));
    }
// -------- Consultabt pages------------
    public function consultantLogin()
    {
        return view('frontend.default.consultantlogin');
    }    
    public function consultantSignup()
    {
        return view('frontend.default.consultantsignup');
    }
    public function consultantVerifyEmail()
    {
        return view('frontend.default.consultantverifyemail');
    }
    public function consultantVerifyYourEmail()
    {
        return view('frontend.default.consultantverifyyouremail');
    }
    public function profileSetup()
    {
        return view('frontend.default.profilesetup');
    }    
    public function profileDetails()
    {
        return view('frontend.default.profiledetails');
    }
    public function profileExpertises()
    {
        return view('frontend.default.profileexpertises');
    }
    public function profileEducation()
    {
        return view('frontend.default.profileeducation');
    }
    public function profileConsultation()
    {
        return view('frontend.default.profileconsultation');
    }
    public function profileExpertisesPopup()
    {
        return view('frontend.default.profileexpertisespopup');
    }
    public function profileConsultationBooks()
    {
        return view('frontend.default.profileconsultationbooks');
    }
    public function profileConsultationInterview()
    {
        return view('frontend.default.profileconsultationinterview');
    } 
    public function profileBiography()
    {
        return view('frontend.default.profilebiography');
    }
    public function profilePicture()
    {
        return view('frontend.default.profilepicture');
    }
    public function profileCompleted()
    {
        return view('frontend.default.profilecompleted');
    }

}
