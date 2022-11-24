<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
    	// mengambil data judul dan deskripsi singkat dari table barang
    	$barang = DB::table('barang')->paginate();
 
    	// mengirim data judul dan deskripsi singkat ke view dashboard.blade.php
    	return view('dashboard',['barang' => $barang]);
 
    }

	// method untuk menampilkan view form tambah event
	public function tambah()
	{
	
		// memanggil view tambah
		return view('tambah');
	
	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table barang
		DB::table('barang')->insert([
			'nama_event' => $request->nama_event,
			'deskripsi_singkat' => $request->deskripsi_singkat,
			'deskripsi' => $request->deskripsi,
			'gambar' => $request->gambar
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/dashboard');
	
	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$barang = DB::table('barang')->where('event_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['barang' => $barang]);
	
	}
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('barang')->where('event_id',$request->id)->update([
			'nama_event' => $request->nama_event,
			'deskripsi_singkat' => $request->deskripsi_singkat,
			'deskripsi' => $request->deskripsi,
			'gambar' => $request->gambar
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/dashboard');
	}
	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('barang')->where('event_id',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect('/dashboard');
	}
}