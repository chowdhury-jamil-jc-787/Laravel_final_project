<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response;
use App\Test;

class JsonController extends Controller
{
    public function index()
   {
      return view('json');
   }  
 
  public function store(Request $request)
  {
      $data = $request->only('name','email','mobile_number');
      $test['token'] = time();
      $test['data'] = json_encode($data);
      Test::insert($test);
      return Redirect::to("laravel-json")->withSuccess('Great! Successfully store data in json format in datbase');
  }
}
