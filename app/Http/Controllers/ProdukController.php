<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Produk;
=======
<<<<<<< HEAD
use App\Produk;
=======
<<<<<<< HEAD
use App\Produk;
=======
<<<<<<< HEAD
use App\Produk;
=======
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa

class ProdukController extends Controller
{
    public function daftar(Request $req)
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
    	/*Menghubungkan Tabel Produk dengan Kategori*/
    	$data = Produk::join('kategori','kategori.id','produk.id_kategori')
    			->where('nama_produk','like',"%{$req->keyword}%")
    			->select('produk.*','nama_kategori')
    			->orderBy('updated_at','desc')
    			->paginate(10);

    	return view('admin.pages.produk.daftar',['data'=>$data]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
    }

    /*Fungsi add/tambah*/
    public function add()
    {
        return view('admin.pages.produk.add');
    }

    /*Fungsi Simpan/Save*/
<<<<<<< HEAD
    public function save(Request $req)
    {
        \Validator::make($req->all(),[
            'kode'=>' required|between:3,100|unique:produk,kode_produk',
            'nama_produk'=>'required|between:3,100',
            'kategori'=>'required|numeric',
            'harga'=>'required|numeric',
            'stok'=>'required|numeric',
            'gambar'=>'required|image',
        ])->validate();
        
        return 'Fungsi Save';
=======
    public function Save(Request $req)
    {
        return 'Fungsi Save';
<<<<<<< HEAD
=======
=======
=======
    	return view('admin.pages.produk.daftar');
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
    }
}
