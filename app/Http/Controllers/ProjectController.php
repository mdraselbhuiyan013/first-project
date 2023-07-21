<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    function page(Request $request){
        return view(view:'pages.projects');
    }


    function projectsData (Request $request){
        return DB::table(table:'projects')->get();
    }
}
