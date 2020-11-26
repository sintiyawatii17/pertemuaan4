<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{


	function showBeranda (){
		return view ('beranda');
	}

	function showProduk (){
		return view ('produk');
	}

	function showKategori (){
		return view ('kategori');
	}

	function showBarang (){
		return view ('barang');
	}

}