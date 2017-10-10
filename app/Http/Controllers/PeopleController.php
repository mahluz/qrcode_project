<?php

namespace App\Http\Controllers;

use App\Absent;
use App\Bill;
use App\People;
use App\Sallary;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PeopleController extends Controller {
	public function index() {
		$data["people"]=People::get();
		return view('people.index',$data);
	}
	public function readData(Request $request) {
		$data["people"] = People::where('qrcode', $request["data"])->first();
		$data["denda"]  = Bill::get();
		// return Carbon::now();
		// ($data) ? $result = $data : $result = "data not found";

		if ($data["people"]) {
			$data["absent"] = Absent::where('people_id', $data["people"]->id)->where('date_absent', date('Y-m-d', strtotime(Carbon::now())))->first();
			if ($data["absent"]) {
				$result = "You are already signed";
			} else {

				$denda = 0;
				foreach ($data["denda"] as $index => $ini):
				if (date('H', strtotime(Carbon::now())) >= $ini->start_at && date('H', strtotime(Carbon::now())) <= $ini->end_at) {
					$denda = $ini->bill;
				}
				endforeach;

				$db["absent"] = Absent::create([
						"people_id"   => $data["people"]->id,
						"date_absent" => date('Y-m-d', strtotime(Carbon::now())),
						"status"      => (date('H', strtotime(Carbon::now()) >= 7))?"telat":"masuk tepat waktu",
						"bill"        => $denda,
					]);
				// return $db["absent"];
				return $db["absent"];
				$result = $db["absent"]->status;
			}
			// $result = "lalala";
		} else {
			$result = "data not found";
		}

		return Response::json($result);
	}

	public function test() {
		$data  = date('Y-m-d H:i', strtotime(Carbon::now()));
		$data2 = Carbon::now();
		$data3 = Absent::get();
		$data4 = (int) date('i', strtotime(Carbon::now()));
		// return Carbon::now();
		// return date('H:i', strtotime(Carbon::now()));
		if (date('H:i', strtotime(Carbon::now())) >= "10:00" && date('H:i', strtotime(Carbon::now())) <= "10:17") {
			$denda = 10;
			return "telat";
		} else {
			$denda = 0;
			return "tidak telat";
		}
	}
	public function getData(Request $request){
		$data["absent"] = People::join('absents','peoples.id','=','absents.people_id')
							->where('people_id',$request["id"])->get();
		$data["sallary"] = Sallary::where('people_id',$request["id"])->first();
		$data["date"] = date("M",strtotime("2017-10"));
		return Response::json($data);
	}
}
