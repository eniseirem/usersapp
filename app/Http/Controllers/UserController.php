<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UserController extends Controller
{
    //
    public function index(){


        $api_link = "https://randomuser.me/api/?nat=tr&results=10";
        $json = json_decode(file_get_contents($api_link), TRUE);
        //print_r($json);
        $json = $json['results'];
        return view('users')->with('json',$json);
    }


    public function details()
    {
        $api_link = 'https://randomuser.me/api?nat=tr';
        $json = json_decode(file_get_contents($api_link));
        return view('details', ['user' => $json->results[0]]);
    }
}

