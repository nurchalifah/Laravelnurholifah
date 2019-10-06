<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function daftar(Request $req)
    {
    	$data = Kategori::where('nama_kategori','like',"%{$req->keyword}%")
    	->paginate(10);
    	
    	return view('admin.pages.kategori.daftar',['data'=>$data]);
    }

    public function add()
    {
    	return view('admin.pages.kategori.add');
    }

    public function save(Request $req)
    {
    	\Validator::make($req->all(),[
    			'kategori'=>'required|between:3,100|unique:kategori,nama_kategori',
    		])->validate();

    	$result = new Kategori;
    	$result->nama_kategori = $req->kategori;

    	if( $result->save()) {
    		return redirect()->route('admin.kategori')
    					->with('result','success');
    	} else {
    		return back()->with('result','fail')->withInput();
    	}
    }

    public function edit($id)
    {
        $data = Kategori::where('id',$id)->first();
        return view('admin.pages.kategori.edit',['rc'=>$data]);
    }

    public function update(Request $req)
    {
        \Validator::make($req->all(),[
                'kategori'=>'required|between:3,100|unique:kategori,nama_kategori,'.$req->id,
        ])->validate();

        $result = Kategori::where('id',$req->id)
                    ->update([
                        'nama_kategori'=>$req->kategori,
                    ]);
        if( $result ){
            return redirect()->route('admin.kategori')->with('result','update');
        } else {
            return back()->with('result','fail');
            
        }
    }
    public function delete(Request $req)
    {
        $result = Kategori::find($req->id);
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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

        if ( $result->delete() ) {
            return back()->with('result','delete');
        } else {
            return back()->with('result','fail-delete');
        }
    }
}

=======
>>>>>>> e8d1c9960c9c083443976c5cde0aaebda2d2368c
>>>>>>> a31952c29e9c512f67aebb7d7aa6274f36f04f50
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
>>>>>>> 1b3f73d7c01efdf7778310aab377db3e11a9a5f9
>>>>>>> 2b159662351026b520a702d1e6de5789bfcdd07f
         if ( $result->delete() ) {
            return back()->with('result','delete');
        } else {
            return back()->with('result','fail');
        }
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
}
>>>>>>> eps-29
>>>>>>> e8d1c9960c9c083443976c5cde0aaebda2d2368c
>>>>>>> a31952c29e9c512f67aebb7d7aa6274f36f04f50
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
>>>>>>> 1b3f73d7c01efdf7778310aab377db3e11a9a5f9
>>>>>>> 2b159662351026b520a702d1e6de5789bfcdd07f
