@extends('layouts.admin.master')

@section('content')
	<h1>Form Tag</h1>

	<div class="ml-3 mt-3">
		<form action="/admin/tag" method="post">
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input class="form-control" type="text" name="name" placeholder="Isi Nama Tag...">

			<input class="btn btn-primary mt-3" type="submit"  value="create tag">
		</div>
		</form>
	</div>
@endsection