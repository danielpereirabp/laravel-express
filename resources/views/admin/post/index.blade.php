@extends('template')

@section('content')

	<h1>Blog Admin</h1>

	<hr>

	<a href="{{ route('admin.post.create') }}" class="btn btn-success">Create new post</a>

	<hr>

	<table class="table">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Action</th>
		</tr>

		@foreach($posts as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td>
					<a href="{{ route('admin.post.edit', ['id'=>$post->id]) }}" class="btn btn-default">Edit</a>
					<a href="{{ route('admin.post.destroy', ['id'=>$post->id]) }}" class="btn btn-danger">Destroy</a>
				</td>
			</tr>
		@endforeach
	</table>

	{!! $posts->render() !!}

@endsection