<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class PostGuzzleController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/check');
   
        $jsonData = $response->json();
         
        dd($jsonData);
    }
 
    public function store()
    {
        $response = Http::post('http://localhost:8080/check', [
                    'title' => 'This is test from tutsmake.com',
                    'body' => 'This is test from tutsmake.com as body',
                ]);
   
        dd($response->successful());
    }
}