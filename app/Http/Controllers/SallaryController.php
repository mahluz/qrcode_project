<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\People;
use App\Sallary;

class SallaryController extends Controller
{
    public function index(){
    	$data["sallary"] = People::join('salaries','peoples.id','=','salaries.people_id')->get();
    	return view('sallary.index',$data);
    }
    public function delete(Request $request){
    	dd($request);
    }
}
