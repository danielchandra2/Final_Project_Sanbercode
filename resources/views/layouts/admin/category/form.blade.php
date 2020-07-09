@extends('layouts.admin.master')

@section('content')
	<h1>Form Category</h1>

	<div class="ml-3 mt-3">
		<form action="/admin/category" method="post">
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input class="form-control" type="text" name="name" placeholder="Isi Nama Kategori...">

			<input class="btn btn-primary mt-3" type="submit"  value="create category">
		</div>
		</form>
	</div>
@endsection