<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    function page(Request $request){
        return view (view:'pages.contact');
    }


    function contactRequest (Request $request){
        return DB::table(table:'contacts')->insert($request->input());
    }
}
