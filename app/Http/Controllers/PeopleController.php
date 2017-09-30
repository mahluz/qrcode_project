<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\People;
use App\Absent;
use Carbon\Carbon;

class PeopleController extends Controller
{
    public function index(){

    	return view('people.index');
    }
    public function readData(Request $request){
    	$data["people"] = People::where('qrcode',$request["data"])->first();

    	// ($data) ? $result = $data : $result = "data not found";

    	if ($data["people"]) {
    		$data["absent"] = Absent::where('people_id',$data["people"]->id)->where('date_absent',date('Y-m-d',strtotime(Carbon::now())))->first();
    		if($data["absent"]){
    			$result = "You are already signed";
    		} 
    		else {
    			$db["absent"] = Absent::create([
    				"people_id" => $data["people"]->id,
    				"date_absent" => date('Y-m-d',strtotime(Carbon::now())),
    				"status" => (date('H',strtotime(Carbon::now())) >= 7 ? "telat" : "masuk tepat waktu"),
    				]);
    			$result = $db["absent"]->status;
    		}
    		// $result = "lalala";
    	} else {
    		$result = "data not found";
    	}

    	return Response::json($result);
    }

    public function test(){
    	$data = date('Y-m-d H:i',strtotime(Carbon::now()));
    	$data2 = Carbon::now();
    	$data3 = Absent::get();
    	$data4 = (int)date('i',strtotime(Carbon::now()));
    	return (date('H',strtotime(Carbon::now())) >= 7  ? "telat" : "masuk tepat waktu");
    }
}
