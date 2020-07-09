@extends('layouts.admin.master')

@section('content')
	<h1>Category Table</h1>
	<div class="ml-3 mt-3">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kategori</th>
				</tr>
			</thead>
			<tbody>
				@foreach($category as $key=>$category)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $category->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		<a href="/admin/category/create" class="btn btn-primary">Create New Category</a>
	</div>
@endsection