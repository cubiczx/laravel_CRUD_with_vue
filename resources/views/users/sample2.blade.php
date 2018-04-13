@extends('layouts.main')

@section('content')
	<div id="users">
		<div class="row">
			<div class="col-sm-4">
				<h1>@{{ title }}</h1>
				<ul class="list-group">
					<li v-for="item in lists" class="list-group-item">
						@{{ item.name }}
					</li>
				</ul>
			</div>
			<div class="col-sm-8">
				<h1>JSON</h1>
				<pre>
					@{{ $data }}
				</pre>
			</div>
		</div>
	</div>
@stop