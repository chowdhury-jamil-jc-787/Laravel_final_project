<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;

class dummyAPI extends Controller
{
    function getData($id=null)
    {
    	return $id?Device::find($id):Device::all();
    }
    function add(Request $req)
    {
    	$device= new device;
    	$device->name=$req->name;
    	$device->member_id=$req->member_id;
    	$result=$device->save();
    	if($result)
    	{
    		return ["Result"=>"Data has been stored"];
    	}
    	else{
    		return ["Result"=>"operation failed"];
    	}

    }
}
