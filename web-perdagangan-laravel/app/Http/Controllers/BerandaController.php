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
		$jammurah = Jam::select('*')->orderByRaw('harga ASC')->paginate(9);
		$jam= Jam::latest()->paginate(9);
		$alljam = Jam::select('*')->paginate(9);
        return view('belanja', ['jam'=> $jam] ,['jammurah' => $jammurah,'alljam' => $alljam]);
	}
	public function about(){
		$jam= Jam::latest()->paginate(3);
        return view('about', ['jam'=> $jam]);
	}
	public function contact(){
        $jam= Jam::latest()->paginate(3);
        return view('contact', ['jam'=> $jam]);
	}
	public function search(Request $Request){
		$datasearch = Jam::select('*')->where('nama','LIKE','%'.$Request->search.'%')->paginate(9);
		$jam= Jam::latest()->paginate(9);
		$jammurah = Jam::select('*')->orderByRaw('harga ASC')->paginate(9);
		return view('belanja',['jam' => $jam, 'alljam' => $datasearch, 'jammurah' => $jammurah]);
	}
	public function produkDetail($id){
		$jam= Jam::latest()->paginate(3);
		$datajam = Jam::select('*')->where('id',$id)->first();
		return view('detailJam',['jam' => $jam, 'datajam' => $datajam]);
	}
}