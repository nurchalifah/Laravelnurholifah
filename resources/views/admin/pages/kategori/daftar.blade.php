@extends('admin.main')
@section('title','Kategori')
@section('content')
<h1>Kategori</h1>
<hr>

@if( session('result') == 'success' )
<div class="alert alert-success alert-dismissible fade show">
	<strong>Saved !</strong>Berhasil disimpan.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

@if(session('result') == 'delete')
<div class="alert alert-success alert-dismissible fade show">
	<strong>Deleted!</strong> Berhasil dihapus.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

@if(session('result') == 'fail-delete')
<div class="alert alert-danger alert-dismissible fade show">
	<strong>Failde!</strong> Gagal dihapus.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

@if( session('result') == 'update' )
<div class="alert alert-success alert-dismissible fade show">
	<strong>Updated !</strong>Berhasil diupdate.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

@if( session('result') == 'deletee' )
<div class="alert alert-success alert-dismissible fade show">
	<strong>Deleted !</strong>Berhasil dihapus.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

@if( session('result') == 'fail-delete' )
<div class="alert alert-danger alert-dismissible fade show">
	<strong>Failed !</strong>Gagal dihapus.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

<div class="row">
	<div class="col-md-6 mb-3">
		<a href="{{ route('admin.kategori.add') }}" class="btn btn-primary">[+] Tambah</a>
	</div>

	<div class="col-md-6 mb-3">
		<form method="GET" action="{{ route('admin.kategori') }}">
			<div class="input-group">
				<input type="text" name="keyword" class="form-control" 
				value="{{ request('keyword') }}">
				<div class="input-group-append">
					<button type="submit" class="btn btn-primary">
						Cari!
					</button>
				</div>
			</div><!-- End Input Group-->
		</form>
	</div>
</div><!-- End Row -->

<table class="table table-striped mb-3">
	<tr>
		<th>Kategori</th><th>&nbsp;</th>
	</tr>
	@foreach($data as $dt)
	<tr>
		<td>{{ $dt->nama_kategori }}</td>
		<td>
			<a href="{{route('admin.kategori.edit',['id'=>$dt->id])}}" 
			class="btn btn-success btn-sm">
				<i class="fa fa-w fa-edit"></i>
			</a>
			<button type="button" class="btn btn-danger btn-sm btn-trash"
			data-id="{{ $dt->id}}">
				<i class="fa fa-w fa-trash"></i>
			</button>
		</td>
	</tr>
	@endforeach
</table>

{{
	$data->appends( request()->only('keyword') )
	->links('vendor.pagination.bootstrap-4')
}}

@endsection

@push('modal')
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-header">
				<h5 class="modal-title">Delete</h5>
				<button class="close" type="button" data-dismiss="modal">
					<span>x</span>
				</button>
			</div><!--End Modal Header-->

			<div class="modal-body">
				Apakah anda yakin ingin menghapusnya?
				<form id="form-delete" method="post" action="{{ route('admin.kategori') }}">
					{{ csrf_field() }}
					{{ method_field('delete') }}
					<input type="hidden" name="id" id="input-id">
				</form>
			</div><!--End Modal Body-->

			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<button class="btn btn-primary btn-delete" type="button">Delete</button>
			</div>

	</div><!--End Modal Content-->
</div><!-- End Modal Dialog-->
</div>
@endpush

@push('js')
<script type="text/javascript">
$(function(){
	$('.btn-trash').click(function(){
<<<<<<< HEAD
		id = $(this).attr('data-id');		
=======
<<<<<<< HEAD
		id = $(this).attr('data-id');		
=======
<<<<<<< HEAD
		id = $(this).attr('data-id');		
=======
<<<<<<< HEAD
		id = $(this).attr('data-id');		
=======
<<<<<<< HEAD
		id = $(this).attr('data-id');		
=======
<<<<<<< HEAD
		id = $(this).attr('data-id');		
=======
<<<<<<< HEAD
		id = $(this).attr('data-id');		
=======
<<<<<<< HEAD
		id = $(this).attr('data-id');		
=======
<<<<<<< HEAD
		id = $(this).attr('data-id');
=======
		id = $(this).attr('data-id');		
>>>>>>> eps-29
>>>>>>> e8d1c9960c9c083443976c5cde0aaebda2d2368c
>>>>>>> a31952c29e9c512f67aebb7d7aa6274f36f04f50
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
>>>>>>> 1b3f73d7c01efdf7778310aab377db3e11a9a5f9
>>>>>>> 2b159662351026b520a702d1e6de5789bfcdd07f
		$('#input-id').val(id);
		$('#deleteModal').modal('show');
	});

	$('.btn-delete').click(function(){
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
		alert($('#input-id').val());
	});

})
=======
>>>>>>> e8d1c9960c9c083443976c5cde0aaebda2d2368c
>>>>>>> a31952c29e9c512f67aebb7d7aa6274f36f04f50
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
>>>>>>> 1b3f73d7c01efdf7778310aab377db3e11a9a5f9
>>>>>>> 2b159662351026b520a702d1e6de5789bfcdd07f
		$('#form-delete').submit();
	});

});
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
>>>>>>> eps-29
>>>>>>> e8d1c9960c9c083443976c5cde0aaebda2d2368c
>>>>>>> a31952c29e9c512f67aebb7d7aa6274f36f04f50
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
>>>>>>> 2d24d056056ee0a08760bbd892dd939377251baa
>>>>>>> 1b3f73d7c01efdf7778310aab377db3e11a9a5f9
>>>>>>> 2b159662351026b520a702d1e6de5789bfcdd07f
</script>
@endpush