<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    
    public function detail($id){
        // mengambil data event berdasarkan judul yang dipilih
        $barang = DB::table('barang')->where('event_id',$id)->get();
      
        // passing data event yang didapat ke view detail.blade.php
        return view('detail',['barang' => $barang]);
 
    } 
}
