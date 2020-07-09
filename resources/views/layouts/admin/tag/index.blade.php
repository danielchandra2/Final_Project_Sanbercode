@extends('layouts.admin.master')

@section('content')
	<h1>Tag Table</h1>
	<div class="ml-3 mt-3">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Tag</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tag as $key=>$tag)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $tag->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		<a href="/admin/tag/create" class="btn btn-primary">Create New Tag</a>
	</div>
@endsection