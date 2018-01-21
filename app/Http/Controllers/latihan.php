<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;

class latihan extends Controller
{
    public function index(){
    	return'Ini Latihan conttroller';
    }

   	public function viewbarang(){
   		//menampilkan semua data melalu model
   		$barang = Barang::all();
   		return view('barang',compact('barang'));
   	}

   	public function babarang(){
   		//menampilkan data menggunakan where melalui model
   		$barang = Barang::where('Nama_barang','like','coklat%')->get();
   		return view('barang',compact('barang'));
   	}

   	public function barang(){
   		$barang= Barang::all();
   		return $barang;
   	}
}
