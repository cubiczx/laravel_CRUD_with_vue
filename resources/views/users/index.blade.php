@extends('layouts.main')

@section('content')
	<div id="app">
		<h1>@{{ title }}</h1>
		<vc-users users="{{ $users }}"></vc-users>
	</div>
@stop