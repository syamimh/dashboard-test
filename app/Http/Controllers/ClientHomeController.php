<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ClientHomeController extends Controller
{
    public function index()
    {
    	$projects = Project::all();

    	return view('client.home');
    }
}
