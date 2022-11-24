<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
	public function index()
    {
    	// mengambil data judul dan deskripsi singkat dari table barang
    	$barang = DB::table('barang')->paginate(4);
 
    	// mengirim data judul dan deskripsi singkat ke view index.blade.php
    	return view('index',['barang' => $barang]);
 
    }

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$barang = DB::table('barang')
		->where('nama_event','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index',['barang' => $barang]);
 
	}
}
