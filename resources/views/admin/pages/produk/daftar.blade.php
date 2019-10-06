@extends('admin.main')
@section('title','Produk')
@section('content')
<h1>Produk</h1>
<hr>
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

<!-- Baris Tambah dan Pencarian -->
<div class="row">
	<!-- Tombol Tambah -->
	<div class="col-md-6 mb-3">
<<<<<<< HEAD
		<a href="{{ route('admin.produk.add') }}" class="btn btn-primary">[+] Tambah</a>
=======
<<<<<<< HEAD
		<a href="{{ route('admin.produk.add') }}" class="btn btn-primary">[+] Tambah</a>
=======
<<<<<<< HEAD
		<a href="{{ route('admin.produk.add') }}" class="btn btn-primary">[+] Tambah</a>
=======
		<a href="#" class="btn btn-primary">[+] Tambah</a>
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
	</div>

	<!-- formulir pencarian -->
	<div class="col-md-6 mb-3">
		<form method="GET" action="{{ route('admin.produk') }}">
			<div class="input-group">
				<input type="text" name="keyword" class="form-control"
				value="{{ request('keyword') }}">
				<div class="input-group-append">
					<button type="submit" class="btn btn-primary">
						Cari!
					</button>
				</div>
			</div><!-- End Input group -->
		</form>
	</div>
</div><!-- End Row -->

<!-- Baris Daftar Data -->
<table class="table table-striped mb-3">
	<tr>
		<th>Gambar</th><th>Produk</th><th>&nbsp;</th>
	</tr>
	@foreach($data as $dt)
	<tr>
		<!-- Kolom Gambar -->
		<td>
			<img src="{{url('storage/gambar-produk/'.$dt->gambar_produk)}}"
			width="75">
		</td>

		<!-- Kolom Data Produk -->
		<td>
			<small class="text-muted">{{$dt->kode_produk}}</small> <br>
			{{$dt->nama_produk}},
			Harga Rp.{{number_format($dt->harga,0,',','.')}},
			Jumlah Stok {{$dt->stok}} <br>
			<small class="text-muted">{{$dt->nama_kategori}}</small>
		</td>

		<!-- Kolom Tombol -->
		<td>
			<!-- Tombol Edit -->
			<a href="#"
			class="btn btn-success btn-sm">
				<i class="fa fa-w fa-edit"></i>
			</a>

			<!-- Tombol Edit Gambar -->
			<a href="#"
			class="btn btn-info btn-sm">
				<i class="fa fa-w fa-edit"></i>
			</a>

			<!-- Tombol Hapus -->
			<button type="button"
			data-id="{{$dt->id}}"
			class="btn btn-danger btn-sm btn-trash">
				<i class="fa fa-w fa-trash"></i>
			</button>
		</td>
	</tr>
	@endforeach
</table>


<!-- Pagging/Halaman -->
{{
	$data->appends(request()->only('keyword'))
	->links('vendor.pagination.bootstrap-4')
}}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
@endsection