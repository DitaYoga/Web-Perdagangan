<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jam;


class BerandaController extends Controller
{
	public function index(){
		$jam= Jam::latest()->get();
        return view('welcome', ['jam'=> $jam]);
	}
}