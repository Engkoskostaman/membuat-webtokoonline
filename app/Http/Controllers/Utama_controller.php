<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\M_Barang;
use Illuminate\Support\Facades\DB;

class Utama_controller extends Controller
{
    public function index(){
      $barang = DB::table('tbl_barang')->get();
      return view('utama',['barang'=>$barang]);

    }

    public function store(Request $request){
      $this->validate($request,['file'=>'required|max:2048']);
      $file=$request->file('file');
      $name_file=time()."_".$file->getClientOriginalName();
      $tujuan_upload='data_file';
      if ($file->move($tujuan_upload,$name_file)){
        $data = M_Barang::create([
          'nama_produk'=>$request->nama_produk,
          'harga'=>$request->harga,
          'gambar'=>$name_file
        ]);
        $res['message']="succes!";
        $res['values']=$data;
        return response($res);
      }

    }
}
