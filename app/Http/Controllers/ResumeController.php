<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ResumeController extends Controller
{
    function page(Request $request){
        return view(view:'pages.resume');
    }


    function resumeLink (Request $request){
        return DB::table(table:'resumes')->first();
    }
    function experiencesData (Request $request){
        return DB::table(table:'experiences')->get();
    }
    function educationData (Request $request){
        return DB::table(table:'educations')->get();
    }
    function languagesData (Request $request){
        return DB::table(table:'languages')->get();
    }

}
