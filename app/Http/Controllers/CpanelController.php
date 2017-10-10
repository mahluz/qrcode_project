<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Absent;
use App\Bill;

class CpanelController extends Controller
{
    public function index(){
    	$data["people"] = People::get();
    	return view('admin.index',$data);
    }
}
