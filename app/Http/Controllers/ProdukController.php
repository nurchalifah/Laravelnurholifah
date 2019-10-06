<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Produk;
=======
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d

class ProdukController extends Controller
{
    public function daftar(Request $req)
    {
<<<<<<< HEAD
    	/*Menghubungkan Tabel Produk dengan Kategori*/
    	$data = Produk::join('kategori','kategori.id','produk.id_kategori')
    			->where('nama_produk','like',"%{$req->keyword}%")
    			->select('produk.*','nama_kategori')
    			->orderBy('updated_at','desc')
    			->paginate(10);

    	return view('admin.pages.produk.daftar',['data'=>$data]);
=======
    	return view('admin.pages.produk.daftar');
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
    }
}
