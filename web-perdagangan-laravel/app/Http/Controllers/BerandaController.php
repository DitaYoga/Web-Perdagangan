<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jam;
use App\Product;


class BerandaController extends Controller
{
	public function index(){
		$jam= Jam::latest()->get();
		$jampopular = Jam::select('*')->orderByRaw('jumlah_pembelian DESC')->paginate(6);
		$jamhighlight = Jam::select('*')->paginate(2);
        return view('welcome', ['jam'=> $jam,'jampopular' => $jampopular,'jamhighlight' => $jamhighlight]);
	}
	public function shop(){
		$jammurah = Jam::select('*')->orderByRaw('harga ASC')->paginate(9);
		$jam= Jam::latest()->paginate(4);
		$newjam = Jam::latest()->paginate(9);
		$alljam = Jam::select('*')->paginate(9);
        return view('belanja', ['jam'=> $jam, 'newjam' =>$newjam] ,['jammurah' => $jammurah,'alljam' => $alljam]);
	}
	public function about(){
		$jam= Jam::latest()->paginate(4);
        return view('about', ['jam'=> $jam]);
	}
	public function contact(){
        $jam= Jam::latest()->paginate(4);
        return view('contact', ['jam'=> $jam]);
	}
	public function search(Request $Request){
		$datasearch = Jam::select('*')->where('nama','LIKE','%'.$Request->search.'%')->paginate(9);
		$jam= Jam::latest()->paginate(4);
		$newjam = Jam::latest()->paginate(9);
		$jammurah = Jam::select('*')->orderByRaw('harga ASC')->paginate(9);
		return view('belanja',['jam' => $jam, 'alljam' => $datasearch, 'jammurah' => $jammurah,'newjam' =>$newjam]);
	}
	public function cart(){
		return view('cart');
	}
	public function produkDetail($id){
		$jam= Jam::latest()->paginate(4);
		$datajam = Jam::select('*')->where('id',$id)->first();
		return view('detailJam',['jam' => $jam, 'datajam' => $datajam]);
	}
	public function addToCart($id){
		$product = Jam::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "harga" => $product->harga,
                        "gambar" => $product->gambar
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "harga" => $product->harga,
            "gambar" => $product->gambar
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}