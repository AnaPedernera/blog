@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Tags</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($tags as $tag)
					<tr>
						<th>{{ $tag->id }}</th>
						<td>{{ $tag->nombre }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> 

	</div>

@endsection