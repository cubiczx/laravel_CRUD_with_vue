@extends('layouts.main')

@section('content')
	<div id="crud" class="row">
		<div class="col-12">
			<h1 class="page-header">@{{ title }}</h1>
		</div>
		<div class="col-7">
			<a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#create">Nueva Tarea</a>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Task</th>
						<th colspan="2">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="keep in keeps">
						<td width="10px">@{{ keep.id }}</td>
						<td>@{{ keep.keep }}</td>
						<td width="10px">
							<a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="editKeep(keep)">Edit</a>
						</td>
						<td width="10px">
							<a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteKeep(keep)">Delete</a>
						</td>
					</tr>
				</tbody>
			</table>
			@include('task.pagination')
			@include('task.create')
			@include('task.edit')
		</div>
		<div class="col-5">
			<pre>
				@{{ $data }}
			</pre>
		</div>
	</div>
@endsection