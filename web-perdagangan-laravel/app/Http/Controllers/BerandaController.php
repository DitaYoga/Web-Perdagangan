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
	public function shop(){
		$jam= Jam::latest()->paginate(9);
        return view('belanja', ['jam'=> $jam]);
	}
	public function about(){
		$jam= Jam::latest()->paginate(9);
        return view('about', ['jam'=> $jam]);
	}
	public function contact(){
        $jam= Jam::latest()->paginate(9);
        return view('contact', ['jam'=> $jam]);
	}
}