<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Produk;
=======
<<<<<<< HEAD
use App\Produk;
=======
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff

class ProdukController extends Controller
{
    public function daftar(Request $req)
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
    	/*Menghubungkan Tabel Produk dengan Kategori*/
    	$data = Produk::join('kategori','kategori.id','produk.id_kategori')
    			->where('nama_produk','like',"%{$req->keyword}%")
    			->select('produk.*','nama_kategori')
    			->orderBy('updated_at','desc')
    			->paginate(10);

    	return view('admin.pages.produk.daftar',['data'=>$data]);
<<<<<<< HEAD
    }

    /*Fungsi add/tambah*/
    public function add()
    {
        return view('admin.pages.produk.add');
    }

    /*Fungsi Simpan/Save*/
    public function Save(Request $req)
    {
        return 'Fungsi Save';
=======
=======
    	return view('admin.pages.produk.daftar');
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
    }
}
