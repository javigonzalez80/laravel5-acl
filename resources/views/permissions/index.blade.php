@extends('layout')

@section('content')

	<h1>Permissions</h1>
	
	<a href="{{ url('permissions/create') }}" class="btn btn-primary btn-md" role="button">Create Permission</a>
	<hr/>
	
	<table class="table table-bordered">
        <thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Show</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
        </thead>
		<tbody>
	
	@foreach ($permissions as $permission)
	
			<tr>
				 <td>{{ $permission->id }}</td>
				 <td>{{ $permission->name }}</td>
				 <td><a href="{{ route('permissions.show', $permission->id) }}">Show Permission</a></td>
				 <td><a href="{{ route('permissions.edit', $permission->id) }}">Edit Permission</a></td>
				 <td>   
						{!! Form::open([
							'method' => 'DELETE',
							'route' => ['permissions.destroy', $permission->id]
						]) !!}
						{!! Form::submit('Delete Permission?', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
				</td>
			</tr>
	
	@endforeach
	
		</tbody>
    </table>
	

@stop