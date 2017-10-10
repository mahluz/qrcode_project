<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;

class BillController extends Controller
{
    public function index(){
    	$data["bill"] = Bill::get();
    	return view('bill.index',$data);
    }
}
