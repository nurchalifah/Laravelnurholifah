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
>>>>>>> 1b3f73d7c01efdf7778310aab377db3e11a9a5f9
>>>>>>> 2b159662351026b520a702d1e6de5789bfcdd07f

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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
>>>>>>> 1b3f73d7c01efdf7778310aab377db3e11a9a5f9
>>>>>>> 2b159662351026b520a702d1e6de5789bfcdd07f
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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
>>>>>>> 1b3f73d7c01efdf7778310aab377db3e11a9a5f9
>>>>>>> 2b159662351026b520a702d1e6de5789bfcdd07f
    }

    /*Fungsi add/tambah*/
    public function add()
    {
        return view('admin.pages.produk.add');
    }

    /*Fungsi Simpan/Save*/
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1b3f73d7c01efdf7778310aab377db3e11a9a5f9
>>>>>>> 2b159662351026b520a702d1e6de5789bfcdd07f
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
        
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2b159662351026b520a702d1e6de5789bfcdd07f
        /* Ganti nama file */
        $filename = rand(1,999).'_'.str_replace(' ', '', $req->gambar->getClientOriginalName());

        /* simpan file ke storage->app->public */
        $req->file('gambar')->storeAs('public/gambar-produk',$filename);

        $result = new Produk;
        $result->kode_produk = $req->kode;
        $result->nama_produk = $req->nama_produk;
        $result->id_kategori = $req->kategori;
        $result->harga = $req->harga;
        $result->stok = $req->stok;
        $result->gambar_produk = $filename;

        if ($result->save()){
            return redirect()->route('admin.produk')->with('result','success');
        } else {
            return back()->with('result','fail')->withInput();
        }
<<<<<<< HEAD
    }

    public function edit($id)
    {
        $data = Produk::find($id);
        return view('admin.pages.produk.edit',['rc'=>$data]);
    }

    public function update(Request $req)
    {
        return 'Fungsi Update';
=======
=======
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
>>>>>>> 1b3f73d7c01efdf7778310aab377db3e11a9a5f9
>>>>>>> 2b159662351026b520a702d1e6de5789bfcdd07f
    }
}
