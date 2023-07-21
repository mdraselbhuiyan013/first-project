<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    function page(Request $request){
        return view(view:'pages.home');
    }


    function heroData (Request $request){
        return DB::table(table:'heroproperties')->first();
    }
    function aboutData (Request $request){
        return DB::table(table:'abouts')->get();
    }
    function socialDataRequest (Request $request){
        return DB::table(table:'socials')->get();
    }

}
