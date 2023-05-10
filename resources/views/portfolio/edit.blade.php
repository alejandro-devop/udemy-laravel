@extends('layout')
@section('title', 'Portfolio')
@section('content')
<h1>Edit "{{$project->title}}"</h1>
@if($errors->any())
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

<form method="post" action="{{ route('portfolio.update', $project) }}">
	@csrf
	@method('PATCH')
	{{-- <input type="hidden" name="_method" value="PATCH" /> --}}
	<label>
		Título <br>
		<input type="text" name="title" value="{{old('title', $project->title)}}" />
	</label><br>
	<label>
		Slug <br>
		<input type="text" name="slug" value="{{old('slug', $project->slug)}}" />
	</label><br>
	<label>
		Descripción <br>
		<textarea type="text" name="description" >{{ old('description', $project->description) }}</textarea>
	</label><br>
	<button>Actualizar</button>
</form>
@endsection