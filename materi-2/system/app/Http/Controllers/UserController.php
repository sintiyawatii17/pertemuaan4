<?php 

namespace App\http\Controllers;
Use App\Models\Produk;

class UserController extends Controller{

	function homeindex(){
		$data['list_produk'] = produk::all();
		return view ('home','$data');
	}
}