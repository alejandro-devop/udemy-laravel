@extends('layout')
@section('title', 'Portfolio')
@section('content')
<h1>Crear proyecto</h1>
@if($errors->any())
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

<form method="post" action="{{ route('portfolio.store') }}">
	@csrf
	<label>
		Título <br>
		<input type="text" name="title" />
	</label><br>
	<label>
		Slug <br>
		<input type="text" name="slug" />
	</label><br>
	<label>
		Descripción <br>
		<textarea type="text" name="description"></textarea>
	</label><br>
	<button>Guardar</button>
</form>
@endsection