<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MissionController extends Controller
{
    public function Index()
    {
        $Missions = DB::select("select * from missions");
        var_dump($Missions);
        return view("Missions.list", array("Missions" => $Missions));
    }

    public function add(){
        return view("Missions.add");
    }

    public function Store(Request $request){
        $designation = $request->input("Designation");
        $DateMission = $request->input("DateMission");
        $id = DB::table("missions")->insertGetId(array(
            "designation"=>$designation,
            "DateMission"=>$DateMission
        ));
        return redirect()->route("mission.details",array("id"=>$id));
    }
    public function Details($id){
        $missions = DB::select("select * from missions where id = ?",[$id]);
        $constats = DB::select("select * from constats where idMission = ?",[$id]);
        if(count($missions) > 0){
            return view("Missions.details",array("mission"=>$missions[0],"constats"=>$constats));
        }else{
            abort(404);
        }
    }
}
