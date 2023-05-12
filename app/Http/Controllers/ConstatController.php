<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConstatController extends Controller
{
    public function Add(Request $request,$id){
        $designation = $request->input("Designation");
        DB::insert("insert into constats (designation,idMission) VALUES (?,?)",[$designation,$id]);
        return redirect()->route("mission.details",array("id"=>$id));
    }
}
