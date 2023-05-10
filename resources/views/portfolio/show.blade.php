@extends('layout')
@section('title', "View - " . $project->title)

@section('content')
<a href="{{route('portfolio.edit', $project)}}">Editar</a>
<form method="POST" action="{{ route('portfolio.destroy', $project) }}">
	@csrf @method('DELETE')
	<button>Eliminar</button>
</form>
<h2>{{$project->title}}</h2>
<p>{{ $project->description }}</p>
<p>{{ $project->created_at }}</p>
@endsection
