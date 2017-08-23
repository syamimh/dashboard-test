<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ManagerHomeController extends Controller
{
	public function __construct()
	{
		return $this->middleware('manager');
	}
	
    public function index()
    {
    	// dd(auth()->check());
    	$client = new Client();
    	$result = $client->request('GET','https://api.github.com/repos/syamimh/ionic');
    	// print_r(json_encode($result));
        $response = json_decode($result->getBody(), true);
        echo $reponse;
    	return view('manager.home');
    }
}
